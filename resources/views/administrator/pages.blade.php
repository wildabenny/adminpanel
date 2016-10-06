@extends('layouts.layout-admin')

@section('content')

    <link type="text/css" href="{{URL::asset('css/listitems.css')}}" rel="stylesheet">

    <div class="col-md-6 col-md-offset-3">
        <h3 style="text-align: center">Strony</h3>
    </div>

    <div class="container">

        <div class="col-md-8">

            <div class="row">

                <ul class="itemslist">
                    <li class="listitle">
                        <div>
                            Id
                        </div>
                        <div style="width: 80%">
                            Name
                        </div>
                    </li>
                    @foreach($pages as $page)
                        <li class="listitem">
                            <div class="divitem1">
                                {{$page->id}}
                            </div>
                            <div class="divitem">
                                {{$page->title}}
                                <a href="{{route('editPageForm', ['page' => $page->id])}}">
                                    <button class="btn btn-primary btn-xs" style="float: right">Edytuj</button>
                                </a>
                                <a href="{{route('deletePageForm', ['page' => $page->id])}}">
                                    <button class="btn btn-danger btn-xs" style="float: right">Usuń</button>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>

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