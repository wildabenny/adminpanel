<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::guest()) {
            return view('auth.login');
        }
        return view('administrator.welcome');
    }
}
