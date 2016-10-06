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
                <textarea name="shortname" class="form-control" placeholder="Krótka nazwa produktu"
                          style="height: 40px"></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: small">Długa nazwa</label>
                <textarea name="longname" class="form-control" placeholder="Długa nazwa"></textarea>
            </div>

            <div class="form-group">
                <label style="font-size: small">Opis</label>
                <textarea name="description" class="form-control" placeholder="Opis"></textarea>
            </div>

            <div class="form-group">
                <input type="file" name="image" id="image">
            </div>
            <div>
                <label style="font-size: small">Kolejność wyświetlania</label><br>
                <input type="number" name="displayorder" min="1" max="500">
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




