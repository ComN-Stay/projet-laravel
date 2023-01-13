@extends('layouts')

@section('content')
<h1>Formulaire genre</h1>
<form name="genderForm" method="post" action="/gender/{{ $path }}">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Genre</label>
        <input name="name" id="name" class="" value="{{ $gender->name ?? '' }}">
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $gender->id ?? '' }}">
        <button type="submit" class="btn btn-info">Valider</button>
    </div>
</form>
<a class="btn btn-success" href="/gender">Retour</a>
@endsection