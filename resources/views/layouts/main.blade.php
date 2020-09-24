<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @yield('title')
    </head>

    <body>
        <x-alert type="error" :message="$message ?? ''"
            >Bonjour petit composant</x-alert
        >
        @yield('content')
    </body>
</html>
