@extends('layouts.layout-admin')

@section('content')

    <link type="text/css" href="{{asset('css/listitems.css')}}" rel="stylesheet">

    <div class="col-md-6 col-md-offset-3">

        <h3 style="text-align: center">Strony</h3>

    </div>

    <div class="container">

        <div class="col-md-8">

            <div class="row">

                <form method="get" action="{{route('searchpages')}}" class="navbar-brand" role="search">

                    <div class="input-group search-form">
                        <input type="text" class="form-control" name="search" placeholder="Nazwa strony...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" style="color: #2ca02c">
                                Szukaj
                            </button>
                        </span>
                    </div>
                </form>

                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>Nazwa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <th scope="row">{{$page->id}}</th>
                            <td>{{$page->title}}</td>
                            <td>
                                <a href="{{route('editPageForm', ['page' => $page->id])}}">
                                    <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('deletePageForm', ['page' => $page->id])}}">
                                    <button class="btn btn-danger btn-xs">Usuń</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

        <div class="col-md-4" style="text-align: center">

            <a href="{{route('addPage')}}">
                <button class="btn btn-primary">Dodaj stronę</button>
            </a>
        </div>
    </div>

    <div class="container" style="text-align: center">
        {{$pages->links()}}
    </div>

@endsection