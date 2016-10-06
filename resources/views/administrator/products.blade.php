@extends('layouts.layout-admin')

@section('content')

    <link type="text/css" href="{{URL::asset('css/listitems.css')}}" rel="stylesheet">

    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align: center">Produkty</h3>
    </div>

    <div class="container">

        <div class="col-md-8">

            <div class="row">

                <ul class="itemslist">
                    <li class="listitle">
                        <div>
                            Id
                        </div>
                        <div style="width: 80%">
                            Name
                        </div>
                    </li>
                    @foreach($products as $product)
                        <li class="listitem">
                            <div class="divitem1">
                                {{$product->displayorder}}
                            </div>
                            <div class="divitem">
                                {{$product->shortname}}
                                <a href="{{route('editProductForm', ['product' => $product->id])}}">
                                    <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                                </a>
                                <a href="{{route('deleteProductForm', ['product' => $product->id])}}">
                                    <button class="btn btn-danger btn-xs" style="float: right">Usuń</button>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>

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