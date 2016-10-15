@extends('layouts.layout-admin')

@section('content')

    <div class="container">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-md-12">

            <div class="row">

                <form method="POST" action="{{route('editProduct', ['id' => $product->id])}}"
                      enctype="multipart/form-data">

                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="form-group row">
                        <label class="col-xs-2">Krótka nazwa</label>
                        <div class="col-xs-10">
                            <input name="shortname" class="form-control" placeholder="Krótka nazwa"
                                   value="{{$product->shortname}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-2">Długa nazwa</label>
                        <div class="col-xs-10">
                            <input name="longname" class="form-control" placeholder="Długa nazwa"
                                   value="{{$product->longname}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-2">Opis</label>
                        <div class="col-xs-10">
                            <input name="description" class="form-control" placeholder="Opis"
                                   value="{{$product->description}}">
                        </div>
                    </div>

                    <fieldset class="form-group row">
                        <legend class="col-form-legend col-sm-2">Główny produkt</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="mainproduct">
                                    Tak
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="mainproduct">
                                    Nie
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Kolejność wyświetlania</label>
                        <div class="col-xs-10">
                            <input class="form-control" type="number" name="displayorder" min="1" max="500"
                                   value="{{$product->displayorder}}">
                        </div>
                    </div>

                    <div class="form-group row" style="text-align: center">
                        <label>Aktualny plik: {{basename($product->image)}}
                            <input type="file" name="image" class="form-control-file">
                        </label>
                    </div>

                    <div class="form-group" style="text-align: center">
                        <button class="btn btn-primary">Zapisz</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

@endsection