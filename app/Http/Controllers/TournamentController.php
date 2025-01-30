<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamsRequest;
use App\Services\TournamentService;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    protected $tournamentService;

    /**
     * TournamentController constructor.
    */
    public function __construct(TournamentService $tournamentService)
    {
        $this->tournamentService = $tournamentService;
    }

    /**
     * Display the tournament index page.
    */
    public function index()
    {
        return view('tournament.index');
    }

    /**
     * Store the teams for the tournament.
     * @param StoreTeamsRequest $request
    */
    public function storeTeams(StoreTeamsRequest $request)
    {
        $this->tournamentService->storeResetTeams($request->teams);
        return redirect()->route('tournament.round1');
    }

    /**
     * Display the first round of the tournament.
    */
    public function round1()
    {
        $winners = $this->tournamentService->selectWinners(4);
        if (!$winners) return redirect()->route('tournament.index');

        return view('tournament.round1', compact('winners'));
    }

    /**
     * Display the second round of the tournament.
    */
    public function round2()
    {
        $winners = $this->tournamentService->selectWinners(2);
        if (!$winners) return redirect()->route('tournament.index');

        $this->tournamentService->addWildcards();

        return view('tournament.round2', compact('winners'));
    }

    /**
     * Display the third round of the tournament.
    */
    public function round3()
    {
        $winners = $this->tournamentService->selectWinners(2);
        if (!$winners) return redirect()->route('tournament.index');

        return view('tournament.round3', compact('winners'));
    }

    /**
     * Display the final round of the tournament and determine the winner.
    */
    public function finalRound()
    {
        $winner = $this->tournamentService->determineFinalRound();
        if (!$winner) {
            return redirect()->route('tournament.index');
        }

        return view('tournament.final', compact('winner'));
    }
}
