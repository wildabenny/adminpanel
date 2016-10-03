@extends('layout')

@section('content')

    <hr>

    {!! Form::open(array('url'=>'addpage','method'=>'POST', 'files'=>true)) !!}
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
        {!! Form::label('Meta Image') !!}
        {!! Form::file('meta_image', null) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Top Image') !!}
        {!! Form::file('top_image', null) !!}
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>


    {!! Form::close() !!}

@endsection
