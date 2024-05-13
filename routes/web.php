<?php

use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'welcome');

Route::get('/market', [MarketController::class, 'market']);

Route::get('/userstable', [AllUsersController::class, 'index'])->middleware('auth');

Route::get('/product/{i}', [ProductController::class, 'product']);

Route::get('/reg', [RegController::class, 'create'])->name('reg')->middleware('guest');
Route::post('/reg', [RegController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');