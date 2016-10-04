<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use DB;
use Illuminate\Http\Request;
use View;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAll()
    {

        $products = Product::orderBy('displayorder')->get();

        return view('/products', ['products' => $products]);

    }

    public function showProduct($id)
    {

        return view('/product', ['product' => Product::findOrFail($id)]);

    }

    public function add(Request $request, Product $product)
    {

        //$product_views = new Product();
        $request->file('image')->move(public_path('images'));
        $request->file('image')->getClientOriginalName();
        $product->image = public_path('images') . '/' . $request->file('image')->getClientOriginalName();
        $product->shortname = $request->shortname;
        $product->longname = $request->longname;
        $product->description = $request->description;
        $product->mainproduct = $request->mainproduct;
        $product->displayorder = $request->displayorder;

        $product->save();

        return redirect()->action('ProductsController@showAll');


    }

    public function addForm()
    {

        return view('addproduct');
    }

    public function edit(Product $product)
    {

        return View::make('/editproduct')->with('product', $product);
        //return view('/editproduct', ['product', $product]);
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $request->file('image')->move(public_path('images'));
        $request->file('image')->getClientOriginalName();
        $product->image = public_path('images') . '/' . $request->file('image')->getClientOriginalName();
        $product->shortname = $request->shortname;
        $product->longname = $request->longname;
        $product->description = $request->description;
        $product->mainproduct = $request->mainproduct;
        $product->displayorder = $request->displayorder;

        $product->save();

        return redirect()->action('ProductsController@showAll');

    }

    public function destroy($id)
    {

        Product::destroy($id);

        return redirect()->action('ProductsController@showAll');

    }

    public function deleteForm(Product $product)
    {

        return view('/deleteproduct', ['product' => $product]);

    }
}
