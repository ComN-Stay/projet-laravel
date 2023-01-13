@extends('layouts')

@section('content')
<h1>Page détail disque</h1>
<ul>
    <li>ID : {{ $library->id }}</li>
    <li>Titre : {{ $library->name }}</li>
    <li>Artiste : {{ $library->name }}</li>
    <li>Genre : {{ $library->name }}</li>
</ul>
<div>
    <a href="/library/update/{{ $library->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/library/delete/{{ $library->id }}"><i class="fa-solid fa-trash-can"></i></a>
</div>
<a href="/library">Retour</a>
@endsection