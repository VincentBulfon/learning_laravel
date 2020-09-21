<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>

    <body>
        <h1>Création d'un nouvel article</h1>
        <form action="/posts" method="post">
            @csrf
            <label for="title">Titre de votre article&nbsp;</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}"
            />
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
    </body>
</html>
