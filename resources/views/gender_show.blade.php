@extends('layouts')

@section('content')
<h1>Page détail genre</h1>
    <h4>ID : {{ $gender->id }}</h4>
    <h4>Genre : {{ $gender->name }}</h4>
</ul>
<div>
    <a href="/gender/update/{{ $gender->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/gender/delete/{{ $gender->id }}"><i class="fa-solid fa-trash-can"></i></a>
</div>
<h6>Disques dans ce genre :</h6>
<table class="display">
    <thead>
        <tr>
            <th>Artiste</th>
            <th>Titre</th>
            <th class="no-sort"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($libraries as $library)
    <tr>
    <td>{{ $library->artist->name}}</td>
    <td>{{ $library->title }}</td>
    <td><a href="/library/update/{{ $library->id }}"><i class="fa-solid fa-pen-to-square mr-2"></i></a>&nbsp;&nbsp;&nbsp;
    <a href="/library/delete/{{ $library->id }}"><i class="fa-solid fa-trash-can"></i></a>
</td>
    </tr>
    @endforeach
</table>
<a class="btn btn-success" href="/gender">Retour</a>
@endsection