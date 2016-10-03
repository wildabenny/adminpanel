<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showAll()
    {

        return view('/pages');
    }

    public function add(Request $request, Page $page)
    {

        return view('addpage');

    }

    public function addForm()
    {

        return view('addpage');
    }
}
