<?php

use App\Http\Controllers\AllUsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AllUsersController::class, 'index']);