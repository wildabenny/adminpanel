<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Page;
use File;
use Session;
use Storage;
use Symfony\Component\HttpFoundation\Request;
use Validator;
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

        return view('administrator/pages', ['pages' => $pages]);

    }

    public function showSearch()
    {
        $search = \Request::get('search');
        $pages = Page::where('title', 'like', '%' . $search . '%')
            ->orderBy('id')
            ->paginate(10);

        return view('administrator.pages', ['pages' => $pages]);
    }

    public function add(Request $request, Page $page)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:pages|max:255',
            'alias' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required'
        ]);

        if ($validator->fails()) {

            return redirect('/administrator/addpage')
                ->withErrors($validator)
                ->withInput();
        }


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

        return view('administrator/addpage');
    }

    public function edit(Page $page)
    {

        return View::make('administrator/editpage')->with('page', $page);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'alias' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
            'meta_image' => 'image',
            'top_image' => 'image'
        ]);

        $page = Page::find($id);

        $file = $request->file('meta_image');
        $filename = $request->file('meta_image')->getFilename();
        //$file->store(public_path('images'));
        $request->file('meta_image')->move('images', $filename);
        $file->getClientOriginalName();
        $page->meta_image = public_path('images') . '/' . $file->getClientOriginalName();
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

    public function deleteForm(Page $page)
    {

        return view('administrator/deletepage', ['page' => $page]);
    }

    public function deleteFile($id)
    {

        $page = Page::find($id);

        $pageFile = $page->meta_image;
        Storage::url($pageFile);

        Storage::delete($pageFile);
        dd($pageFile);


        /* $page->top_image = '';

         $page->save();*/

        Session::flash('flash_message', 'Successfully deleted the File!');

        return back();
    }

    public function destroy($id)
    {

        Page::destroy($id);

        return redirect()->action('PagesController@showAll');

    }
}
