<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DBdisplay', function () {
    $DataBase = DB::select('select * from users');
    return view('DBdisplay')->with('data', $DataBase);
});