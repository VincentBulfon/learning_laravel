<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/posts',
    [PostController::class, 'index']
);

Route::get('/posts/create', [PostController::class, 'create']);

// l'post:id est passé à la class PostController et est récupérée sous forme de paramètre de la fonction 'show' qu'elle contient

Route::post('/posts', [PostController::class, 'store']);

Route::get(
    '/posts/{post:slug}',
    [PostController::class, 'show']
);

Route::resource('/comments', CommentController::class);
