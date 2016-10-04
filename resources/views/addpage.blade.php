@extends('layouts.layout')

@section('content')

    <hr>

    <form method="POST" action="addpage" enctype="multipart/form-data">

        {{csrf_field()}}

        <div class="form-group">
            <textarea name="title" class="form-control" placeholder="Tytuł strony"></textarea>
        </div>

        <div class="form-group">
            <textarea name="alias" class="form-control" placeholder="Alias"></textarea>
        </div>

        <div class="form-group">
            <textarea name="meta_title" class="form-control" placeholder="Meta tytuł"></textarea>
        </div>

        <div class="form-group">
            <textarea name="meta_keywords" class="form-control" placeholder="Meta keywords"></textarea>
        </div>

        <div class="form-group">
            <textarea name="meta_description" class="form-control" placeholder="Meta opis"></textarea>
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

@endsection
