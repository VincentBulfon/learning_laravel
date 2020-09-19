<?php

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
// l'post:id est passé à la class PostController et est récupérée sous forme de paramètre de la fonction 'show' qu'elle contient
Route::get(
    '/posts/{post:title}',
    [PostController::class, 'show']
);
