@extends('layouts.main') @section('title')
<title>Création d'un article</title>
@endsection @section('content')
<h1>Création d'un nouvel article</h1>
<form action="/posts" method="post">
    @csrf
    <label for="title">Titre de votre article&nbsp;</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}" />
    @error('title')
    <p>{{ $message }}</p>
    @endif
    <br />
    <label for="textarea">Contenu de votre article&nbsp;</label>
    <textarea
        rows="30"
        cols="60"
        id="textarea"
        name="body"
        value="{{ old('body') }}"
    ></textarea>
    <br />
    <input type="submit" value="Publier l'article" />
</form>
@endsection
