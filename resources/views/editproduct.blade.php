@extends('layout')

@section('content')

    <form method="POST" action="/administrator/product/{{$product->id}}" enctype="multipart/form-data">

        {{csrf_field()}}
        {{method_field('PATCH')}}

        <div class="form-group">
            <textarea name="shortname" class="form-control">{{$product->shortname}}</textarea>
        </div>

        <div class="form-group">
            <textarea name="longname" class="form-control">{{$product->longname}}</textarea>
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control">{{$product->description}}</textarea>
        </div>

        <div class="form-group">
            <input type="file" name="image" id="image">
        </div>

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

@endsection