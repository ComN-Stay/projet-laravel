@extends('layouts')

@section('content')
<h1>Page détail genre</h1>
<ul>
    <li>ID : {{ $gender->id }}</li>
    <li>Genre : {{ $gender->name }}</li>
</ul>
<div>
    <a href="/gender/update/{{ $gender->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/gender/delete/{{ $gender->id }}"><i class="fa-solid fa-trash-can"></i></a>
</div>
<a href="/gender">Retour</a>
@endsection