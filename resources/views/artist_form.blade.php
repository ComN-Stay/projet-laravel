@extends('layouts')

@section('content')
<h1>Formulaire artiste</h1>
<form name="artistForm" method="post" action="/artist/{{ $path }}">
    @csrf
    <div class="form-group">
        <label for="name" class="form-label">Artiste</label>
        <input name="name" id="name" class="" value="{{ $artist->name ?? '' }}">
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $artist->id ?? '' }}">
        <button type="submit" class="btn btn-info">Valider</button>
    </div>
</form>
<a class="btn btn-success" href="/artist">Retour</a>
@endsection