<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showAll() {

        $products = Product::paginate(15);

        return view('products', ['products' => $products]);

    }

    public function showProduct($id) {

        return view('product', ['product' => Product::findOrFail($id)]);

    }

    public function add(Request $request, Product $product)
    {

        //$product = new Product();
        $request->file('image')->move(public_path('images'));
        $request->file('image')->getClientOriginalName();
        $product->image = public_path('images') . '/' . $request->file('image')->getClientOriginalName();
        $product->shortname = $request->shortname;
        $product->longname = $request->longname;
        $product->description = $request->description;
        $product->mainproduct = $request->mainproduct;
        $product->displayorder = $request->order;

        $product->save();

        return redirect()->action('ProductsController@showAll');


    }

    public function addForm()
    {

        return view('addproduct');
    }
}
