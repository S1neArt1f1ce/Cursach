<?php

namespace App\Http\Controllers;

use App\Market;
use App\Models\Market as ModelsMarket;
use App\Models\Product;
use App\Models\ProductFilter as ProductFilter;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    //
    public function market(Request $request)
    {
        $query = Product::query();

        if($request->filled('product_type')){
            $query -> where('product_type', $request->product_type);
        }

        $products = $query->get();
        $product_type = Product::all();

        $data = ModelsMarket::all();
        return view('market', compact('products', 'product_type'));

    }
}
