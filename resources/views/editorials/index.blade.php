@extends('layout')
@section('content')

<h1>Llistat d'Editorials{{ $author_name ?? '' }}</h1>
<ul>
    @foreach($editorials as $editorial)
        <li>{{$editorial->name}}</li>
    @endforeach
</ul>


<a href="{{route('editorials.create')}}">+ Afegir editorial</a>

@stop