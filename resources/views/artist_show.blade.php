@extends('layouts')

@section('content')
<h1>Page détail artiste</h1>
<h4>ID : {{ $artist->id }}</h4>
<h4>Nom : {{ $artist->name }}</h4>
<div>
    <a href="/artist/update/{{ $artist->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/artist/delete/{{ $artist->id }}"><i class="fa-solid fa-trash-can"></i></a>
</div>
<h6>Disques de cet artiste :</h6>
<table class="display">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Genre</th>
            <th></th>
</tr>
    </thead>
    <tbody>
    @foreach ($libraries as $library)
    <tr>
    <td>{{ $library->title }}</td>
    <td>{{ $library->gender->name}}</td>
    <td><a href="/library/update/{{ $library->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/library/delete/{{ $library->id }}"><i class="fa-solid fa-trash-can"></i></a>
    </td>
</tr>
    @endforeach
    </tbody>
</table>
<a class="btn btn-success" href="/artist">Retour</a>
@endsection