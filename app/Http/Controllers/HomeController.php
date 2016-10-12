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

        $products = Product::where('displayorder', '>', $actual)
            ->orderBy('displayorder', 'desc')
            ->take(11)
            ->get();

        $show_button = false;
        if ($products->count() > 10) {
            $show_button = true;
            //$products = $products->slice(10);
        }

        //var_dump(view('api.ajax', ['products' => $products]));exit;

        return ['html' => (string)view('api.ajax', ['products' => $products]), 'show_button' => $show_button];


        //return Response::json($products);

        //return json_encode($products);

        //return response()->json(array('products' => $products));

    }

}
