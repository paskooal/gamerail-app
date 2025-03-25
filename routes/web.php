<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;

//Rotas de games
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/games', [GameController::class,'index'])->name('games.index');
Route::get('/games/create', [GameController::class,'create'])->name('games.create');
Route::post('/games', [GameController::class,'store'])->name('games.store');
Route::get('/games/{game}', [GameController::class,'show'])->name('games.show');
Route::get('/games/{game}/edit', [GameController::class,'edit'])->name('games.edit');
Route::put('/games/{game}', [GameController::class,'update'])->name('games.update');
Route::delete('/games/{game}', [GameController::class,'destroy'])->name('games.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
