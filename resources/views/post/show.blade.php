<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Learning laravel</title>
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr />
        <a href="/posts">Retourner à la liste des posts</a>
    </body>
</html>
