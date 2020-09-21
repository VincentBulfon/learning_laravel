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
        return view('post.create');
    }

    public function show(Post $post)
    {
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
