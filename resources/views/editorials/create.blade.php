@extends('layout')
@section('content')
<h1>Afegir editorial</h1>
<form method="POST" action="{{ route('editorials.store') }}">
    {!! csrf_field() !!}
    <label for="name">Nom:</label>
    <input name="name" type="text" value="{{ old('name') }}">
    <input type="submit" class="btn btn-primary" value="Afegir">
</form>


@stop