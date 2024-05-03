<?php

namespace App\Http\Controllers;

use App\Product;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product($id){
        $data = ModelsProduct::find($id);
        return view('product', ['data' => $data]);
    }
}
