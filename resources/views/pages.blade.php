@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>Pages</h1>

            <ul class="list-group">
                @foreach($pages as $page)
                    <li class="list-group-item">{{$page->title}}<a href="editpage/{{$page->id}}">
                            <button class="btn btn-primary" style="float: right">Edytuj</button>
                        </a></li>
                @endforeach
            </ul>

            {{$pages->links()}}

        </div>
    </div>

    <div class="col-md-2 col-md-offset-1">
        <a href="addpage">
            <button class="btn btn-primary" style="float: right">Dodaj stronę</button>
        </a>
    </div>

@endsection