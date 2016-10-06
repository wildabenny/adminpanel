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

        <div class="col-md-12" style="text-align: center">

            <div class="row">

                <form method="POST" action="{{route('editProduct', ['id' => $product->id])}}"
                      enctype="multipart/form-data">

                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="form-group">
                        <label style="font-size: small">Krótka nazwa</label>
                        <textarea name="shortname" class="form-control"
                                  style="height: 40px">{{$product->shortname}}</textarea>
                    </div>

                    <div class="form-group">
                        <label style="font-size: small">Długa nazwa</label>
                        <textarea name="longname" class="form-control"
                                  style="height: 40px">{{$product->longname}}</textarea>
                    </div>

                    <div class="form-group">
                        <label style="font-size: small">Opis</label>
                        <textarea name="description" class="form-control"
                                  style="height: 40px">{{$product->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" id="image">
                    </div>

                    <label>Kolejność wyświetlania</label>
                    <input type="number" name="displayorder" min="1" max="500">

                    <fieldset>
                        <label>Główny produkt?</label><br>
                        <input type="radio" name="mainproduct" value="1"/><label>Tak</label><br/>
                        <input type="radio" name="mainproduct" value="0"/><label>Nie</label><br/>
                    </fieldset>

                    <div class="form-group">
                        <button class="btn btn-primary">Zapisz</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection