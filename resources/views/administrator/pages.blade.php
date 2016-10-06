@extends('layouts.layout-admin')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align: center">Strony</h3>
    </div>

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <ul class="list-group" style="list-style: none; margin: 0; padding: 0">

                @foreach($pages as $page)
                    <ul class="list-group-item dropdown-header">{{$page->title}}
                        <a href="{{route('editpage', ['page' => $page->id])}}">
                            <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                        </a>
                        <a href="{{route('deletePageForm', ['page' => $page->id])}}">
                            <button class="btn btn-danger btn-xs" style="float: right">Usuń</button>
                        </a>
                    </ul>

                @endforeach

            </ul>

            {{$pages->links()}}

        </div>

        <a href="addpage">
            <button class="btn btn-primary">Dodaj stronę</button>
        </a>

    </div>

@endsection