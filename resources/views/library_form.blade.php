@extends('layouts')

@section('content')
<h1>Formulaire CDthèque</h1>
<form name="genderForm" method="post" action="/library/{{ $path }}">
    @csrf
    <div class="form-group">
        <label for="title" class="form-label">Titre</label>
        <input name="title" id="title" class="" value="{{ $library->title ?? '' }}">
    </div>
    <div class="form-group">
        <label for="artist" class="form-label">Artiste</label>
        <select name="artist" id="artist">
            @foreach ($artists as $artist)
            <option value="{{ $artist->id }}" @if (isset($library) && $artist->id == $library->artist_id) selected @endif>{{ $artist->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="gender" class="form-label">Genre</label>
        <select name="gender" id="gender">
            @foreach ($genders as $gender)
            <option value="{{ $gender->id }}" @if (isset($library) && $gender->id == $library->gender_id) selected @endif>{{ $gender->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value="{{ $library->id ?? '' }}">
        <button type="submit" class="btn btn-info">Valider</button>
    </div>
</form>
<a class="btn btn-success" href="/library">Retour</a>
@endsection