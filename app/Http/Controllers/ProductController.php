<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product($id)
    {
        $data = ModelsProduct::find($id);
        return view('product', ['data' => $data]);
    }

    public function sell_product()
    {
        return view('sell_product');
    }

    public function store_product(Request $data)
    {
        $data->validate([
            'name' => ['required'],
            'smalldesc' => ['required'],
            'desc' => ['required'],
            'price' => ['required'],
            'product_type' => ['required'],
        ]);

        $product = ModelsProduct::create([
            'name' => $data->name,
            'smalldesc' => $data->smalldesc,
            'desc' => $data->desc,
            'price' => $data->price,
            'seller_id' => Auth::user() -> id,
            'product_type' => $data->product_type,
        ]);

        $product->save();

        return redirect('/market');
    }
}
