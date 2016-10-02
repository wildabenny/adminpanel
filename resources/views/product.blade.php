@extends('layout')

@section('title')
    Product Details
@endsection

@section('content')

    <td>
        <tr>Short name: {{$product->shortname}}</tr><br>
        <tr>Long name: {{$product->longname}}</tr><br>
        @if($product->mainproduct)
            <tr>Main product: YES</tr><br>
        @else
            <tr>Main product: NO</tr><br>
        @endif
        <tr>Description: {{$product->description}}</tr><br>
        <img src="{{$product->image}}">
    </td>


@endsection