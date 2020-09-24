@extends('layouts.main') @section('title')
<title>Affichage des tous les articles</title>
@endsection @section('content')
<h1>Liste des posts</h1>
@if(count($posts))
<ul>
    @foreach($posts as $post)
    <li>
        <a href="/posts/{{$post->slug}}"
            >{{$post->title}} ({{$post->comments_count}})</a
        >
    </li>
    @endforeach
</ul>
@else
<p>Il n'y a pas encore de posts sur cette page</p>
@endif @endsection
