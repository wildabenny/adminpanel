@extends('layouts.layout-admin')

@section('content')

    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-12">

            <div class="row">

                <form method="POST" action="{{route('editPage', ['id' => $page->id])}}" enctype="multipart/form-data">

                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="form-group row">
                        <label class="col-xs-2">Tytuł</label>
                        <div class="col-xs-10">
                            <input name="title" class="form-control" placeholder="Tytuł" value="{{$page->title}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-2">Alias</label>
                        <div class="col-xs-10">
                            <input name="alias" class="form-control" placeholder="Alias" value="{{$page->alias}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-2">Meta-Tytuł</label>
                        <div class="col-xs-10">
                            <input name="meta_title" class="form-control" placeholder="Meta Tytuł"
                                   value="{{$page->meta_title}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-2">Meta-Keywords</label>
                        <div class="col-xs-10">
                            <input name="meta_keywords" class="form-control" placeholder="Meta Keywords"
                                   value="{{$page->meta_keywords}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-2">Meta-Opis</label>
                        <div class="col-xs-10">
                            <input name="meta_description" class="form-control" placeholder="Meta Opis"
                                   value="{{$page->meta_description}}">
                        </div>
                    </div>

                    <div class="form-group" style="text-align: center">
                        <label class="btn btn-default bnt-file">Aktualny plik meta-image:
                            '{{basename($page->meta_image)}}'
                            <a href="{{route('deletePageFile', ['file' => $page->id])}}">Usuń plik</a>
                            <input type="file" name="meta_image">
                        </label>
                    </div>

                    <div class="form-group" style="text-align: center">
                        <label class="btn btn-default btn-file">Aktualny plik top-image: '{{basename($page->top_image)}}
                            <a href="{{route('deletePageFile', ['file' => $page->id])}}">Usuń plik</a>
                            <input type="file" name="top_image">
                        </label>
                    </div>

                    <div class="form-group row" style="text-align: center">
                        <button class="btn btn-primary">Zapisz</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection