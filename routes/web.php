<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CompanieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GameCategoriesController;
use App\Http\Controllers\ProdCategoriesController;

//Rota da home
Route::get('/', [HomeController::class,'index'])->name('home');

//Rotas de games
Route::get('/games', [GameController::class,'index'])->name('games.index');
Route::get('/games/create', [GameController::class,'create'])->name('games.create');
Route::post('/games', [GameController::class,'store'])->name('games.store');
Route::get('/games/{game}', [GameController::class,'show'])->name('games.show');
Route::get('/games/{game}/edit', [GameController::class,'edit'])->name('games.edit');
Route::put('/games/{game}', [GameController::class,'update'])->name('games.update');
Route::delete('/games/{game}', [GameController::class,'destroy'])->name('games.destroy');

//Rotas de companies
Route::get('/companies', [CompanieController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompanieController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanieController::class, 'store'])->name('companies.store');
Route::get('/companies/{companie}', [CompanieController::class, 'show'])->name('companies.show');
Route::get('/companies/{companie}/edit', [CompanieController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{companie}', [CompanieController::class, 'update'])->name('companies.update');
Route::delete('/companies/{companie}', [CompanieController::class, 'destroy'])->name('companies.destroy');

//Rotas de products
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

//Rotas de prod_categories
Route::get('/prod_categories', [ProdCategoriesController::class, 'index'])->name('prod_categories.index');
Route::get('/prod_categories/create', [ProdCategoriesController::class, 'create'])->name('prod_categories.create');
Route::post('/prod_categories', [ProdCategoriesController::class, 'store'])->name('prod_categories.store');
Route::get('/prod_categories{prod_category}', [ProdCategoriesController::class, 'show'])->name('prod_categories.show');
Route::get('/prod_categories/{prod_category}/edit', [ProdCategoriesController::class, 'edit'])->name('prod_categories.edit');
Route::put('/prod_categories/{prod_category}', [ProdCategoriesController::class, 'update'])->name('prod_categories.update');
Route::delete('/prod_categories/{prod_category}', [ProdCategoriesController::class, 'destroy'])->name('prod_categories.destroy');

//Rotas de game_categories
Route::get('/game_categories', [GameCategoriesController::class, 'index'])->name('game_categories.index');
Route::get('/game_categories/create', [GameCategoriesController::class, 'create'])->name('game_categories.create');
Route::post('/game_categories', [GameCategoriesController::class, 'store'])->name('game_categories.store');
Route::get('/game_categories{game_category}', [GameCategoriesController::class, 'show'])->name('game_categories.show');
Route::get('/game_categories/{game_category}/edit', [GameCategoriesController::class, 'edit'])->name('game_categories.edit');
Route::put('/game_categories/{game_category}', [GameCategoriesController::class, 'update'])->name('game_categories.update');
Route::delete('/game_categories/{game_category}', [GameCategoriesController::class, 'destroy'])->name('game_categories.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
