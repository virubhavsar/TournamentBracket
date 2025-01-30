<?php

namespace App\Services;

use App\Models\Team;

class TournamentService
{
    public function storeResetTeams(array $teamNames)
    {
        Team::truncate();
        foreach ($teamNames as $name) {
            Team::create(['name' => $name]);
        }
    }

    public function selectWinners(int $count)
    {
        $teams = Team::where('status', 'active')->get();
        if ($teams->count() < $count) {
            return null;
        }
        $winners = $teams->random($count);
        Team::whereNotIn('id', $winners->pluck('id'))->update(['status' => 'eliminated']);

        return $winners;
    }

    public function addWildcards()
    {
        Team::create(['name' => 'Wild Card 1']);
        Team::create(['name' => 'Wild Card 2']);
    }

    public function determineFinalRound()
    {
        $teams = Team::where('status', 'active')->get();

        if ($teams->count() != 2) {
            return null;
        }

        $winner = $teams->random(1)->first();
        Team::where('id', '!=', $winner->id)->update(['status' => 'eliminated']);

        return $winner;
    }
}
