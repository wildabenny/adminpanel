@extends('layout')

@section('content')

    <hr>

    {!! Form::open(array('url'=>'addproduct','method'=>'POST', 'files'=>true)) !!}
    <div class="form-group">
        <textarea name="shortname" class="form-control" placeholder="Krótka nazwa roduktu"></textarea>
    </div>

    <div class="form-group">
        <textarea name="longname" class="form-control" placeholder="Długa nazwa"></textarea>
    </div>

    <div class="form-group">
        <textarea name="description" class="form-control" placeholder="Opis"></textarea>
    </div>

    <div class="form-group">
        {!! Form::label('Product Image') !!}
        {!! Form::file('image', null) !!}
    </div>

    <fieldset>
        <label>Główny produkt?</label><br>
        <input type="radio" name="mainproduct" value="1"/><label>Tak</label><br/>
        <input type="radio" name="mainproduct" value="0"/><label>Nie</label><br/>
    </fieldset>

    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>


    {!! Form::close() !!}

@endsection




