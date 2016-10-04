@extends('layouts.layout')

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align: center">Strony</h3>
    </div>

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <ul class="list-group">

                @foreach($pages as $page)
                    <li class="list-group-item dropdown-header">{{$page->title}}
                        <a href="editpage/{{$page->id}}">
                            <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                        </a>
                        <a href="/administrator/deletepage/{{$page->id}}">
                            <button class="btn btn-danger btn-xs" style="float: right">Usuń</button>
                        </a>
                    </li>

                @endforeach

            </ul>

            {{$pages->links()}}

        </div>

        <a href="addpage">
            <button class="btn btn-primary">Dodaj stronę</button>
        </a>

    </div>

@endsection