@extends('layout')
@section('content')
    <h1>Llibres{{ $author_name ?? '' ?? 'oferta' }}</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Preu*</th>
                <th>Unitats</th>
            </tr>
            
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author->name}}</td>
                    <td>{{$book->editorial->name}}</td>
                    <td>{{$book->price}}€</td>
                    <td>{{$book->units}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('books.create')}}">+ Afegir llibre</a>
    <p class="mini">* Els preus mostrats són sense aplicar l'IVA del 21%.</p>
@stop