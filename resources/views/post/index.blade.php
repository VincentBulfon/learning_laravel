<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Learning laravel</title>
    </head>

    <body>
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
        @endif
    </body>
</html>
