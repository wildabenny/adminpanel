<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;

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
        $product->shortname = $request->shortname;
        $product->longname = $request->longname;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->mainproduct = $request->mainproduct;

        $product->save();

        return back();


    }

    public function addForm()
    {

        return view('addproduct');
    }
}
