@extends('layout')
@section('content')
    <h1>Llibres</h1>
    <table class="table">
        <thead>
            <tr>Nom</tr>
            <tr>Autor</tr>
            <tr>Editorial</tr>
            <tr>Preu</tr>
            <tr>Unitats</tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->editorial}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->units}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('authors.create')}}">Afegir llibre</a>
@stop