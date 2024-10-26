<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/games/index');
});

Route::get('/gamestore', function () {
    return view('gamestore');
});
//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //games
});
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
    Route::post('/games/store', [GameController::class, 'store'])->name('games.store');
    Route::get('/games/index', [GameController::class, 'index'])->name('games.index');
    Route::delete('/games/destroy/{id}', [GameController::class, 'destroy'])->name('games.destroy');
    Route::get('/games/edit/{id}', [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/update/{id}', [GameController::class, 'update'])->name('games.update');
require __DIR__ . '/auth.php';
