<?php

namespace App\Http\Controllers;

use App\Page;
use App\Product;
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

    public function products($number)
    {
        $products = Product::where('displayorder', '>=', $number)
            ->orderBy('displayorder', 'desc')
            ->limit(10)
            ->get();

        //return $products->toJson();

        return Response::json($products);

    }

    public function test()
    {
        $msg = "Wiadomość testowa2";

        return response()->json(array('msg' => $msg), 200);
    }
}
