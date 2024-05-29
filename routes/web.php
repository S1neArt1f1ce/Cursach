<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::view('/', 'welcome');

Route::get('/market', [MarketController::class, 'market'])->name('market');

// Route::get('/userstable', [AllUsersController::class, 'index'])->middleware('auth');

Route::get('/product/{i}', [ProductController::class, 'product']);

Route::get('/register', [RegController::class, 'create'])->name('register')->middleware('guest');
Route::post('/register', [RegController::class, 'store'])->middleware('guest');

Route::get('/login', [UserController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'store'])->middleware('guest');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'show'])->name('profile');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {


    Route::get('/userstable', [AllUsersController::class, 'index'])->name('userstable');
});

Route::middleware(['auth', 'seller'])->group(function () {

    Route::get('/sell_product', [ProductController::class, 'sell_product'])->name('sell_product');
    Route::post('/sell_product', [ProductController::class, 'store_product']);

});
