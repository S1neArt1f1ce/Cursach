<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'seller_id' => Auth::user()->id,
            'product_type' => $data->product_type,
        ]);

        $gallery = $data->name . Auth::user()->id;
        $path = public_path() . 'img/prods/' . $gallery;
        Storage::makeDirectory($path);

        $data->file('img')->storeAs('img/prods/' . $gallery, $data->name . Auth::user()->id . '.jpg','public');

        $product->save();
        return redirect('/market');
    }

    // public function add_prod_image()
    // {
    //     return view('add_prod_image');
    // }

    // public function store_prod_image(Request $img)
    // {
    //     dd($img->all());
    // }
}
