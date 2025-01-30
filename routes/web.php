<?php

use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;




Route::get('/', [TournamentController::class, 'index'])->name('tournament.index');
Route::post('/tournament/store', [TournamentController::class, 'storeTeams'])->name('tournament.store');
Route::get('/tournament/round1', [TournamentController::class, 'round1'])->name('tournament.round1');
Route::get('/tournament/round2', [TournamentController::class, 'round2'])->name('tournament.round2');
Route::get('/tournament/round3', [TournamentController::class, 'round3'])->name('tournament.round3');
Route::get('/tournament/final', [TournamentController::class, 'finalRound'])->name('tournament.final');
