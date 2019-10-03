@extends('layout')

@section('content')
    <h1>Llistat d'Autors</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{$author->name}}</li>
        @endforeach
    </ul>
    

    <a href="{{route('authors.create')}}">Afegir autor</a>
@stop