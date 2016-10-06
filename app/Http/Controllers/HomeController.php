<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        return view('front.index');
    }

    public function onas()
    {
        return view('front.o-nas');
    }

    public function indexAdmin()
    {
        return view('administrator.welcome');
    }

    public function contact()
    {
        return view('front.kontakt');
    }

    public function about()
    {
        return view('front.o-nas');
    }
}
