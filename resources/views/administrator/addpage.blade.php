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

        <form method="POST" action="addpage" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group">
                <label style="font-size: small">Tytuł strony</label>
                <textarea name="title" class="form-control" style="height: 40px"></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: small">Alias</label>
                <textarea name="alias" class="form-control" style="height: 40px"></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: small">Meta tytuł</label>
                <textarea name="meta_title" class="form-control" style="height: 40px"></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: small">Meta keywords</label>
                <textarea name="meta_keywords" class="form-control" style="height: 40px"></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: small">Meta opis</label>
                <textarea name="meta_description" class="form-control" style="height: 40px"></textarea>
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

    </div>

@endsection
