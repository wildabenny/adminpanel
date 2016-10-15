@extends('layouts.layout-admin')

@section('content')

    <div class="container" style="text-align: center">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('addPage')}}" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group row">
                <label class="col-xs-2">Tytuł</label>
                <div class="col-xs-10">
                    <input name="title" class="form-control" placeholder="Tytuł" value="{{old('title')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xs-2">Alias</label>
                <div class="col-xs-10">
                    <input name="alias" class="form-control" placeholder="Alias" value="{{old('alias')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xs-2">Meta-Tytuł</label>
                <div class="col-xs-10">
                    <input name="meta_title" class="form-control" placeholder="Meta Tytuł"
                           value="{{old('meta_title')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xs-2">Meta-Keywords</label>
                <div class="col-xs-10">
                    <input name="meta_keywords" class="form-control" placeholder="Meta Keywords"
                           value="{{old('meta_keywords')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-xs-2">Meta-Opis</label>
                <div class="col-xs-10">
                    <input name="meta_description" class="form-control" placeholder="Meta Opis"
                           value="{{old('meta_description')}}">
                </div>
            </div>

            <div class="form-group">
                <label class="btn btn-default btn-file">
                    <input type="file" name="top_image">
                </label>
            </div>

            <div class="form-group">
                <label class="btn btn-default btn-file">
                    <input type="file" name="meta_image">
                </label>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">Zapisz</button>
            </div>
        </form>

    </div>

@endsection
