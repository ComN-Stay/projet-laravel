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
                <td>{{ $library->artist }}</td>
                <td>{{ $library->gender }}</td>
                <td>
                    <a href="/gender/show/{{ $library->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/gender/update/{{ $library->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/gender/delete/{{ $library->id }}"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        @endforeach
    </tboby>
</table>
<a class="btn btn-success" href="/library/create">Nouveau disque</a>
@endsection