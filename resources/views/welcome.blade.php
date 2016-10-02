@extends('layout')

@section('title')
    Welcome page
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="list-group">
                <li class="list-group-item"><a href="pages"> Strony</a></li>
                <li class="list-group-item"><a href="products">Produkty</a></li>
            </ul>
        </div>
    </div>
@endsection
