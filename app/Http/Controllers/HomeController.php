<?php

namespace App\Http\Controllers;

use App\Page;

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
        $page = Page::where('alias', $alias)->first();

        return view('front.' . $alias, ['page' => $page]);
    }
}
