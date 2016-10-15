@extends('layouts.layout-admin')

@section('content')

    <div class="container">

        <div class="row">

            <form method="POST" action="{{route('productDelete', ['id' => $product->id])}}">

                {{method_field('DELETE')}}
                {{csrf_field()}}
                <div class="col-md-8 col-lg-offset-4">
                    <ul>
                        <li class="dropdown-header">Jesteś pewien???</li>
                        <input class="btn btn-danger" type="submit" value="Usuń">

                    </ul>

                </div>

            </form>
            <div class="col-md-6 col-md-offset-4">
                <ul>
                    <a href="{{url('administrator/products')}}">
                        <button class="btn btn-primary">Anuluj</button>
                    </a>
                </ul>
            </div>

        </div>
    </div>

@endsection