<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource("players", PlayerController::class)->middleware(['auth', 'verified']);
Route::resource("teams", TeamController::class)->middleware(['auth', 'verified']);
Route::resource("results", ResultController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(
    "players/trash/{id}",
    [PlayerController::class, "trash"]
)->name("players.trash");

Route::get(
    "teams/trash/{id}",
    [TeamController::class, "trash"]
)->name("teams.trash");

Route::get(
    "results/trash/{id}",
    [ResultController::class, "trash"]
)->name("results.trash");


Route::get(
    "players/trashed/{id}",
    [PlayerController::class, "trashed"]
)->name("players.trashed");

Route::get(
    "teams/trashed/{id}",
    [TeamController::class, "trashed"]
)->name("teams.trashed");

Route::get(
    "results/trashed/{id}",
    [ResultController::class, "trashed"]
)->name("results.trashed");

Route::get(
    "players/restore/{id}",
    [PlayerController::class, "trash"]
)->name("players.restore");

Route::get(
    "teams/restore/{id}",
    [TeamController::class, "trash"]
)->name("teams.restore");

Route::get(
    "results/restore/{id}",
    [ResultController::class, "trash"]
)->name("results.restore");

require __DIR__.'/auth.php';
