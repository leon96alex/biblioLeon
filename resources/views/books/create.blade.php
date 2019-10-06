@extends('layout')
@section('content')

<h1>Afegir Llibre</h1>
<form method="POST" action="{{ route('books.store') }}">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name">Nom:</label>
        <input class="form-control"  name="name" type="text" value="{{ old('name') }}">
    </div>
    
    <div class="form-group">
        <label class="col-form-label" for="author">Autor:</label>
        <select class="custom-select" name="author" selected="{{old('author') }}">
            @foreach($authors as $author)

            <option value={{$author->id}}>{{$author->name}}</option>

            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="col-form-label" for="editorial">Editorial:</label>
        <select class="custom-select" name="editorial" selected="{{old('editorial') }}">
            @foreach($editorials as $editorial)

            <option value={{$editorial->id}}>{{$editorial->name}}</option>

            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Preu:</label>
        <input class="form-control"  name="price" type="number" min="0.01" step="0.01" value="{{ old('price') }}">
    </div>
    <div class="form-group">
        <label for="name">Unitats:</label>
        <input class="form-control"  name="units" type="number" min="1" step="1" value="{{ old('units') }}">
    </div>
    <input type="submit" class="btn btn-primary" value="Afegir">
</form>
@stop