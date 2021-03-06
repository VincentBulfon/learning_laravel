@extends('layouts.main') @section('title')
<title>Affichage d'un des posts</title>
@endsection @section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
<hr />
@if(count($post->comments))
<ol>
    @foreach($post->comments as $comment)
    <li>{{$comment->body}}</li>
    @endforeach
</ol>
@else
<p>Il n'y a pas de commentaires pour ce post'</p>
@endif
<form action="/comments" method="POST">
    @csrf
    <label for="com">Ecrivez votre commentaire ici &nbsp;:</label>
    <input type="textarea" name="body" id="com" />
    @error('body')
    <p>{{ $message }}</p>
    @enderror
    <input type="hidden" name="post_id" value="{{$post->id}}" />
    @error('post_id')
    <p>Arrête d'essayer de tout casser</p>
    @enderror
    <input type="hidden" name="post_slug" value="{{$post->slug}}" />
    <input type="submit" value="Valider le commentaire." />
</form>

<hr />
<a href="/posts">Retourner à la liste des posts</a>
@endsection
