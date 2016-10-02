<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class PagesController extends Controller
{
    public function test() {

        $products = Product::all();

        return view('products', compact('products'));
    }
}
