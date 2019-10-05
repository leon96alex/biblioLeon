@extends('layout')

@section('content')
<h1>Llistat d'Autors</h1>
<ul>
    @foreach($authors as $author)
        <li><a href="{{route('books.getBooksByAuthor', $author->id)}}">{{$author->name}}</a></li>
    @endforeach
</ul>


<a href="{{route('authors.create')}}">+ Afegir autor</a>
<P>Clica sobre qualsevol autor per a veure totes les seves publicacions!</P>
@stop