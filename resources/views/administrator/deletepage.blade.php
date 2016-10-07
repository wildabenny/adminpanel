@extends('layouts.layout-admin')

@section('content')


    <div class="container">
        <div class="row">
            <form method="POST" action="{{route('deletePage', ['id' => $page->id])}}">

                {{method_field('DELETE')}}
                {{csrf_field()}}


                <div class="col-md-6 col-lg-offset-4">
                    <ul>
                        <li class="dropdown">Jesteś pewien??</li>
                        <input class="btn btn-danger" type="submit">
                    </ul>
                </div>
            </form>

            <div class="col-md-6 col-md-offset-4">
                <ul>
                    <a href="{{route('pages')}}">
                        <button class="btn btn-primary">Anuluj</button>
                    </a>
                </ul>
            </div>
        </div>
    </div>

@endsection