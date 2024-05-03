<?php

use App\Http\Controllers\AllUsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/market', [MarketController::class, 'market']);

Route::get('/userstable', [AllUsersController::class, 'index']);

Route::get('/product/{i}', [ProductController::class, 'product']);