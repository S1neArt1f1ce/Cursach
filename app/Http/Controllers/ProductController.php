<?php

namespace App\Http\Controllers;

use App\Models\Market;
use App\Product;
use Illuminate\support\Facades\DB;
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

        $data->file('img')->storeAs('img/prods/' . $gallery, $data->name . Auth::user()->id . '.jpg', 'public');

        $product->save();
        return redirect('/market');
    }

    public function delete_product(int $id)
    {
        $product = ModelsProduct::find($id);
        if (Auth::user()->id == $product->seller_id) {
            $gallery = $product->name . Auth::user()->id;
            Storage::deleteDirectory('public/img/prods/' . $gallery);
            DB::table('products_all')->where('id', $id)->delete();
            return redirect()->route('market');
        } else {
            return redirect()->route('market');
        }
    }

    public function edit(int $id)
    {
        $product = ModelsProduct::find($id);

        if (Auth::user()->id == $product->seller_id) {
            return view('/editproduct', ['product' => $product]);
        } else {
            return redirect()->route('market');
        }
    }

    public function saveedit(Request $newdata, $id)
    {
        $product = ModelsProduct::find($id);

        $filename = '';

        if (isset($newdata->name)) {
            $product->name = $newdata->name;
            Storage::move();
        }

        if ($newdata->hasFile('img')) {
            $filename = $newdata->getSchemeAndHttpHost() . '/storage/img/prods/' . $newdata->name . $newdata->seller_id . '.' . $newdata->img->extension();

            $newdata->img->move(public_path('/storage/img/prods/' . $newdata->name, $newdata->seller_id), $filename);
        }

        if (isset($newdata->smalldesc)) {
            $product->smalldesc = $newdata->smalldesc;
        }

        if (isset($newdata->desc)) {
            $product->desc = $newdata->desc;
        }

        if (isset($newdata->price)) {
            $product->price = $newdata->price;
        }

        if (isset($newdata->product_type)) {
            $product->product_type = $newdata->product_type;
        }

        if (Auth::user()->id == $product->seller_id) {
            $product->save();
            return redirect()->route('profile');
        } else {
            return redirect()->route('market');
        }
    }
}
