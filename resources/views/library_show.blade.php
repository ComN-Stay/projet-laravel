@extends('layouts')

@section('content')
<h1>Page détail disque</h1>
    <h4>ID : {{ $library->id }}</h4>
    <h4>Titre : {{ $library->title }}</h4>
    <h4>Artiste : {{ $library->artist->name }}</h4>
    <h4>Genre : {{ $library->gender->name }}</h4>

<div>
    <a href="/library/update/{{ $library->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/library/delete/{{ $library->id }}"><i class="fa-solid fa-trash-can"></i></a>
</div>
<a class="btn btn-success" href="/library">Retour</a>
@endsection