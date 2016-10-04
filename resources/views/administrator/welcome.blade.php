@extends('layouts.layout')

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
                <li class="list-group-item"><a href="/administrator/pages"> Strony</a></li>
                <li class="list-group-item"><a href="/administrator/products">Produkty</a></li>
            </ul>
        </div>
    </div>

@endsection
