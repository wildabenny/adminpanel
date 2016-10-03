@extends('layout')

@section('title')
    Products
@endsection

@section('content')


    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <ul class="list-group">

                @foreach($products as $product)

                    <li class="list-group-item"><a href="product/{{$product->id}}">{{$product->shortname}}</a></li>

                @endforeach

            </ul>

            {{$products->links()}}
            <a href="addproduct">
                <button class="btn btn-primary" style="float: right;">Dodaj produkt</button>
            </a>

        </div>

    </div>


@endsection


