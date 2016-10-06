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

        <div class="col-md-12" style="text-align: center">

            <div class="row">

                <form method="POST" action="{{route('editPage', ['id' => $page->id])}}" enctype="multipart/form-data">

                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="form-group">
                        <label style="font-size: small">Tytuł</label>
                        <textarea name="title" class="form-control" style="height: 40px">{{$page->title}}</textarea>
                    </div>

                    <div class="form-group">
                        <label style="font-size: small">Alias</label>
                        <textarea name="alias" class="form-control" style="height: 40px">{{$page->alias}}</textarea>
                    </div>

                    <div class="form-group">
                        <label style="font-size: small">Meta tytuł</label>
                        <textarea name="meta_title" class="form-control"
                                  style="height: 40px">{{$page->meta_title}}</textarea>
                    </div>

                    <div class="form-group">
                        <label style="font-size: small">Meta Keywords</label>
                        <textarea name="meta_keywords" class="form-control"
                                  style="height: 40px">{{$page->meta_keywords}}</textarea>
                    </div>

                    <div class="form-group">
                        <label style="font-size: small">Meta Opis</label>
                        <textarea name="meta_description" class="form-control"
                                  style="height: 40px">{{$page->meta_description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="btn btn-default bnt-file">Aktualny plik meta-image:
                            '{{basename($page->meta_image)}}'
                            <a href="">
                                <button class="btn btn-danger btn-xs">Usuń plik</button>
                            </a>
                            <input type="file" name="meta_image">
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="btn btn-default btn-file">Aktualny plik top-image: '{{basename($page->top_image)}}
                            '
                            <button class="btn btn-danger btn-xs">Usuń plik</button>
                            </a>
                            <input type="file" name="top_image">
                        </label>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Zapisz</button>
                    </div>

                </form>

                {{--<form method="POST" action="{{route('deletePageFile', ['id' => $page->id])}}" enctype="multipart/form-data">

                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <div class="form-group">
                        <label class="btn btn-default btn-file">Aktualny plik top-image: '{{basename($page->top_image)}}'
                            <button class="btn btn-danger btn-xs">Usuń plik</button> </a>
                            <input type="file" name="top_image">
                        </label>
                    </div>
                </form>--}}

            </div>

        </div>

    </div>

@endsection