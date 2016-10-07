@extends('layouts.layout-admin')

@section('content')

    <div class="container" style="text-align: center">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('addProductPost')}}" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group">
                <label style="font-size: small">Krótka nazwa</label>
                <input name="shortname" class="form-control" placeholder="Krótka nazwa produktu"
                       style="height: 40px" value="{{Request::old('shortname')}}">
            </div>

            <div class="form-group">
                <label style="font-size: small">Długa nazwa</label>
                <input name="longname" class="form-control" placeholder="Długa nazwa" value="{{old('longname')}}">
            </div>

            <div class="form-group">
                <label style="font-size: small">Opis</label>
                <input name="description" class="form-control" placeholder="Opis" value="{{old('description')}}">
            </div>

            <div class="form-group">
                <label class="btn btn-default btn-file" value="{{old('image')}}">
                    </a>
                    <input type="file" name="image">
                </label>
            </div>

            <div>
                <label style="font-size: small">Kolejność wyświetlania</label><br>
                <input type="number" name="displayorder" min="1" max="500" value="{{old('displayorder')}}">
            </div>


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

@endsection




