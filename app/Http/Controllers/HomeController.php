<?php

namespace App\Http\Controllers;

use App\Page;
use App\Product;
use Input;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($alias = 'index')
    {

        if ($alias == 'login') {

            return view('/auth/login');
        }

        $page = Page::where('alias', $alias)->first();

        return view('front.' . $alias, ['page' => $page]);
    }

    public function ajaxProducts($actual)
    {

        //$actual = Input::get('actual');
        $products = Product::where('displayorder', '>', intValue($actual))
            ->orderBy('displayorder', 'desc')
            ->limit(10)
            ->get();

        return Response::json($products);

        //return json_encode($products);

        //return response()->json(array('products' => $products));

    }

}
