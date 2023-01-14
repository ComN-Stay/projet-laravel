@extends('layouts')

@section('content')
<h1>Page liste CD</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Artiste</th>
            <th>Genre</th>
            <th></th>
        </tr>
    </thead>
    <tboby>
        @foreach ($libraries as $library)
        <tr>
            <td>{{ $library->id }}</td>
            <td>{{ $library->title }}</td>
            <td>{{ $library->artist->name }}</td>
            <td>{{ $library->gender->name }}</td>
            <td>
                <a href="/library/show/{{ $library->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="/library/update/{{ $library->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
                <a href="/library/delete/{{ $library->id }}"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
        @endforeach
    </tboby>
</table>
<a class="btn btn-success" href="/library/create">Nouveau disque</a>
@endsection