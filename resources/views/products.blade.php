@extends('layout')

@section('title')
    Products
@endsection

@section('content')

    @foreach($products as $product)
        <td>
            <tr><a href="product/{{$product->id}}">{{$product->shortname}}</a></tr>
            <tr>Created: {{$product->added_at}}</tr>
            <br>
        </td>
    @endforeach

@endsection