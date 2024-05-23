<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth', 'UserMiddleware'])->group(function(){

    
    Route::get('/userstable', [AllUsersController::class, 'index'])->name('userstable');

});