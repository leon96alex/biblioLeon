@extends('layout')

@section('content')
<h1>Llistat d'Autors</h1>
<ul>
    @foreach($authors as $author)
        <li>{{$author->name}} - 
            <a href="{{route('books.getBooksByAuthor', $author->id)}}">
                <span class="badge badge-pill badge-primary">Veure Llibres</span>
            </a> - 
            <a href="{{route('editorials.getEditorialsByAuthor', $author->id)}}">
                <span class="badge badge-pill badge-info">Veure Editorials</span>
            </a>
        </li>
    @endforeach
</ul>


<a href="{{route('authors.create')}}">+ Afegir autor</a>
@stop