@extends('layout')

@section('content')

<h3>Benvinguts a BiblioLeon!</h3>
<ul>
    <li><a href="{{route('books')}}">Llistat de llibres</a></li>
    <li><a href="{{route('authors')}}">Llistat d'autors</a></li>
    <li><a href="{{route('editorials')}}">Llistat d'editorials</a></li>
    <hr>
    <li><a href="{{route('books.offer')}}">Llibres d'oferta!</a></li>
</ul>

@stop