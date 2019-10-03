@extends('layout')

@section('content')

<h1>Hello World</h1>
<ul>
    <li><a href="{{route('books')}}">Llistat de llibres</a></li>
    <li><a href="{{route('authors')}}">Llistat de autors</a></li>
</ul>

@stop