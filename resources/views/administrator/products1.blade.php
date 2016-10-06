@extends('layouts.layout-admin')

@section('title')
    Products
@endsection

@section('content')

    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align: center">Produkty</h3>
    </div>

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <ul class="list-group">

                @foreach($products as $product)

                    <h6 class="list-heading" style="font-size: small">Pozycja {{$product->displayorder}}</h6>

                    <li class="list-group-item dropdown-header" style="height: 40px">
                        {{$product->shortname}}
                        <a href="editproduct/{{$product->id}}">
                            <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                        </a>
                        <a href="/administrator/deleteproduct/{{$product->id}}">
                            <button class="btn btn-danger btn-xs" style="float: right">Usuń</button>
                        </a>
                    </li>

                @endforeach

            </ul>

        </div>

        <a href="addproduct">
            <button class="btn btn-primary">Dodaj produkt</button>
        </a>

    </div>

    <div class="container" style="text-align: center">
        {{$products->links()}}
    </div>

@endsection


