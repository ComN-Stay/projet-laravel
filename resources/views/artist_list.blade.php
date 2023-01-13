@extends('layouts')

@section('content')
<h1>Page liste artiste</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th></th>
        </tr>
    </thead>
    <tboby>
        @foreach ($artists as $artist)
            <tr>
                <td>{{ $artist->id }}</td>
                <td>{{ $artist->name }}</td>
                <td>
                    <a href="/artist/show/{{ $artist->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/artist/update/{{ $artist->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/artist/delete/{{ $artist->id }}"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        @endforeach
    </tboby>
</table>
<a class="btn btn-success" href="/artist/create">Nouvel artiste</a>
@endsection