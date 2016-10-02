<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function showAll() {

        $products = Product::where('added_at', '<=', Carbon::now())
            ->orderBy('added_at', 'desc')
            ->paginate(config('products.products_per_page'));

        return view('products', compact('products'));

    }

    public function showProduct($id) {

        return view('product', ['product' => Product::findOrFail($id)]);

    }
}
