@extends('layout')

@section('title')
    Product Details
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <ul class="list-group">

                <li class="list-group-item"> Short name: {{$product->shortname}} </li>
                <li class="list-group-item">Long name: {{$product->longname}} </li>
                @if($product->mainproduct)
                    <li class="list-group-item"> Main product: YES</li>
                @else
                    <li class="list-group-item">Main product: NO</li>
                @endif
                <li class="list-group-item">Description: {{$product->description}} </li>
            </ul>

            <img src="{{$product->image}}">

        </div>

    </div>

@endsection