@extends('layouts.layout-admin')

@section('content')

    <link type="text/css" href="{{URL::asset('css/listitems.css')}}" rel="stylesheet">

    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align: center">Produkty</h3>
    </div>

    <div class="container">

        <div class="col-md-8">

            <div class="row">

                <form method="get" action="{{route('searchproducts')}}" class="navbar-brand" role="search">

                    <div class="input-group search-form">
                        <input type="text" class="form-control" name="search" placeholder="Nazwa strony...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" style="color: #2ca02c">
                                Szukaj
                            </button>
                        </span>
                    </div>
                </form>

                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Nazwa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->shortname}}</td>
                            <td>
                                <a href="{{route('editProductForm', ['product' => $product->id])}}">
                                    <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('deleteProductForm', ['product' => $product->id])}}">
                                    <button class="btn btn-danger btn-xs">Usuń</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

        <div class="col-md-4" style="text-align: center">
            <a href="{{route('addProduct')}}">
                <button class="btn btn-primary">Dodaj produkt</button>
            </a>
        </div>
    </div>

    <div class="container" style="text-align: center">
        {{$products->links()}}
    </div>

@endsection