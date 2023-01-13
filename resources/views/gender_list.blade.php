@extends('layouts')

@section('content')
<h1>Page liste genre</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th></th>
        </tr>
    </thead>
    <tboby>
        @foreach ($genders as $gender)
            <tr>
                <td>{{ $gender->id }}</td>
                <td>{{ $gender->name }}</td>
                <td>
                    <a href="/gender/show/{{ $gender->id }}"><i class="fa-solid fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/gender/update/{{ $gender->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="/gender/delete/{{ $gender->id }}"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
        @endforeach
    </tboby>
</table>
<a class="btn btn-success" href="/gender/create">Nouveau genre</a>
@endsection