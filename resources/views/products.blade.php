@extends('layout')

@section('title')
    Products
@endsection

@section('content')


    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <ul class="list-group">

                @foreach($products as $product)

                    <li class="list-group-item">
                        {{$product->shortname}} <a href="editproduct/{{$product->id}}">
                            <button class="btn btn-primary" style="float: right">Edytuj</button>
                        </a>
                    </li>

                @endforeach

            </ul>

            {{$products->links()}}


        </div>

    </div>

    <div class="col-md-2 col-md-offset-1">

        <a href="addproduct">
            <button class="btn btn-primary">Dodaj produkt</button>
        </a>
    </div>


@endsection


