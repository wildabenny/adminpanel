@extends('layout')

@section('title')
    Products
@endsection

@section('content')

    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <h3>Produkty</h3>

            <ul class="list-group">

                @foreach($products as $product)

                    <h5 class="list-heading">Pozycja {{$product->displayorder}}</h5>

                    <li class="list-group-item dropdown-header">
                        {{$product->shortname}}
                        <a href="editproduct/{{$product->id}}">
                            <button class="btn btn-primary" style="float: right">Edytuj</button>
                        </a>
                        <a href="/administrator/deleteproduct/{{$product->id}}">
                            <button class="btn btn-danger" style="float: right">Delete</button>
                        </a>
                    </li>

                @endforeach

            </ul>

            {{-- {{$products->links()}}--}}

        </div>

        <a href="addproduct">
            <button class="btn btn-primary">Dodaj produkt</button>
        </a>

    </div>

@endsection


