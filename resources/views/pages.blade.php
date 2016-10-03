@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>Pages</h1>

            <ul class="list-group">
                @foreach($pages as $page)
                    <li class="list-group-item"><a href="page/{{$page->id}}">{{$page->title}}</a></li>
            </ul>

            {{$pages->links()}}
            <a href="addpage">
                <button class="btn btn-primary" style="float: right">Dodaj stronę</button>
            </a>
        </div>
    </div>



@endsection