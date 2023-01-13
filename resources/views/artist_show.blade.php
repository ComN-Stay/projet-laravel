@extends('layouts')

@section('content')
<h1>Page détail artiste</h1>
<ul>
    <li>ID : {{ $artist->id }}</li>
    <li>Genre : {{ $artist->name }}</li>
</ul>
<div>
    <a href="/artist/update/{{ $artist->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/artist/delete/{{ $artist->id }}"><i class="fa-solid fa-trash-can"></i></a>
</div>
<a href="/artist">Retour</a>
@endsection