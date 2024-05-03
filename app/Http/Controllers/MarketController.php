<?php

namespace App\Http\Controllers;

use App\Market;
use App\Models\Market as ModelsMarket;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    //
    public function market(){
        $data = ModelsMarket::all();
        return view('market', ['data' => $data]);
    }
}