@extends('layout')

@section('content')

    <form method="POST" action="/page/{{$page->id}}" enctype="multipart/form-data">

        {{csrf_field()}}
        {{method_field('PATCH')}}

        <div class="form-group">
            <textarea name="title" class="form-control">{{$page->title}}</textarea>
        </div>

        <div class="form-group">
            <textarea name="alias" class="form-control">{{$page->alias}}</textarea>
        </div>

        <div class="form-group">
            <textarea name="meta_title" class="form-control">{{$page->meta_title}}</textarea>
        </div>

        <div class="form-group">
            <textarea name="meta_keywords" class="form-control">{{$page->meta_keywords}}</textarea>
        </div>

        <div class="form-group">
            <textarea name="meta_description" class="form-control">{{$page->meta_description}}</textarea>
        </div>

        <div class="form-group">
            <input type="file" name="meta_image">
        </div>

        <div class="form-group">
            <input type="file" name="top_image">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Zapisz</button>
        </div>
    </form>

    </form>

@endsection