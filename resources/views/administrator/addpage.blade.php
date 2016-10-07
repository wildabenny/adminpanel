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

            <div class="form-group">
                <label style="font-size: small">Tytuł strony</label>
                <input name="title" class="form-control" style="height: 40px" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label style="font-size: small">Alias</label>
                <input name="alias" class="form-control" style="height: 40px" value="{{old('alias')}}">
            </div>

            <div class="form-group">
                <label style="font-size: small">Meta tytuł</label>
                <input name="meta_title" class="form-control" style="height: 40px" value="{{old('meta_title')}}">
            </div>

            <div class="form-group">
                <label style="font-size: small">Meta keywords</label>
                <input name="meta_keywords" class="form-control" style="height: 40px" value="{{old('meta_keywords')}}">
            </div>

            <div class="form-group">
                <label style="font-size: small">Meta opis</label>
                <input name="meta_description" class="form-control" style="height: 40px"
                       value="{{old('meta_description')}}">
                >
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
