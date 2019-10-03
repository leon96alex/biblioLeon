@extends('layout')
@section('content')
<h1>Llibres</h1>
    @foreach($books as $book)
        <h2>{{$book->name}}</h2>
    @endforeach
@stop