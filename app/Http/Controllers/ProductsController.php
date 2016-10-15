<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;
use Storage;
use Validator;
use View;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAll()
    {

        $products = Product::orderBy('displayorder')->paginate(5);

        return view('administrator/products', ['products' => $products]);

    }

    public function showSearch()
    {
        $search = \Request::get('search');
        $products = Product::where('shortname', 'like', '%' . $search . '%')
            ->orderBy('id')
            ->paginate(10);

        return view('administrator.products', ['products' => $products]);
    }

    public function showProduct($id)
    {

        return view('administrator/product', ['product' => Product::findOrFail($id)]);

    }

    public function add(Request $request, Product $product)
    {

        $validator = Validator::make($request->all(), [
            'shortname' => 'required|unique:products|max:255',
            'longname' => 'required',
            'description' => 'required',
            'mainproduct' => 'required',
            'displayorder' => 'required|unique:products',
        ]);

        if ($validator->fails()) {

            return redirect('administrator/addproduct')->withErrors($validator)
                ->withInput();
        }

        //$file = $request->file('image');
        /*$extension = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();
        Storage::disk('local')->put($fileName, File::get($file));
        $product->image = $file->getRealPath();*/

        //$path = Storage::putFile('images', $request->file('image'));
        $path = Storage::putFile('public/images', $request->file('image'));
        //$file->move(public_path('images'), $request->file('image')->getClientOriginalName());
        //$request->file('image')->getClientOriginalName()->move(public_path('images'));
        $product->image = $path;
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

        return view('administrator/addproduct');
    }

    public function edit(Product $product)
    {

        return View::make('administrator/editproduct')->with('product', $product);
        //return view('/editproduct', ['product', $product]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'shortname' => 'required|unique:products|max:255',
            'longname' => 'required',
            'description' => 'required',
            'mainproduct' => 'required',
            'displayorder' => 'required|unique:products',
            'image' => 'image|mimes:jpg,png',
        ]);

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

        return view('administrator/deleteproduct', ['product' => $product]);

    }
}
