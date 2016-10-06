@extends('layouts.layout-admin')

@section('title')
    Welcome page
@endsection

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h2 style="text-align: center">Administrator Panel</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="{{route('products')}}"> Strony</a></li>
                <li class="list-group-item"><a href="{{route('pages')}}">Produkty</a></li>
            </ul>
        </div>
    </div>

@endsection
