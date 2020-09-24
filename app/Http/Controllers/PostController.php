<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        //ici dans le premier cas on a deux requêtes car on donne l'information de récupéré la relation à laravel après avoir commencé à récupérer une instance du modèle post
        //$posts = Post::with('comments')->get();
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $message = `Attention c'est dangereux ici`;

        return view('post.create', compact('message'));
    }

    public function show(Post $post)
    {
        //charge tous les commentaires qui sont en relation avec le post en une seul requête au lieu d'en faire une pour récupérer tous les posts puis une à chaque post pour récupérer les commentaires associés
        $post->load('comments');

        return view('post.show', compact('post'));
    }

    public function store(StorePostRequest $request)
    {
        //$validateData est égal a un array de données validées
        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title']);

        Post::create($validatedData);
        // $post = new Post();
        // $post->title = request('title');
        // $post->slug = Str::slug(request('title'));
        // $post->body = request('body');
        // $post->save();

        return redirect('/posts');
    }
}
