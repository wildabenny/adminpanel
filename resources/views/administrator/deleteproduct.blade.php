@extends('layouts.layout-admin')

@section('content')

    <form method="POST" action="/administrator/product/delete/{{$product->id}}">

        {{method_field('DELETE')}}
        {{csrf_field()}}
        <div class="col-md-6 col-lg-offset-4">
            <ul>
                <li class="dropdown-header">Jesteś pewien???</li>
                <input class="btn btn-danger" type="submit" value="Usuń">
            </ul>

        </div>

    </form>

@endsection