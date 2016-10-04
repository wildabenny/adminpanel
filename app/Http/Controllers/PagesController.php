<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAll()
    {

        $pages = Page::paginate(10);
        return view('/pages', ['pages' => $pages]);
    }

    public function add(Request $request, Page $page)
    {

        $request->file('meta_image')->move(public_path('images'));
        $request->file('meta_image')->getClientOriginalName();
        $page->meta_image = public_path('images') . '/' . $request->file('meta_image')->getClientOriginalName();
        $request->file('top_image')->move(public_path('images'));
        $request->file('top_image')->getClientOriginalName();
        $page->top_image = public_path('images') . '/' . $request->file('top_image')->getClientOriginalName();
        $page->title = $request->title;
        $page->alias = $request->alias;
        $page->meta_title = $request->meta_title;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;

        $page->save();

        return redirect()->action('PagesController@showAll');

    }

    public function addForm()
    {

        return view('addpage');
    }

    public function edit(Page $page)
    {

        return View::make('/editpage')->with('page', $page);
    }

    public function update(Request $request, $id)
    {

        $page = Page::find($id);

        $request->file('meta_image')->move(public_path('images'));
        $request->file('meta_image')->getClientOriginalName();
        $page->meta_image = public_path('images') . '/' . $request->file('meta_image')->getClientOriginalName();
        $request->file('top_image')->move(public_path('images'));
        $request->file('top_image')->getClientOriginalName();
        $page->top_image = public_path('images') . '/' . $request->file('top_image')->getClientOriginalName();
        $page->title = $request->title;
        $page->alias = $request->alias;
        $page->meta_title = $request->meta_title;
        $page->meta_keywords = $request->meta_keywords;
        $page->meta_description = $request->meta_description;

        $page->save();

        return redirect()->action('PagesController@showAll');
    }
}
