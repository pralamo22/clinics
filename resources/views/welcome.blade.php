<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('partials.navigation')
    <h1 class="text-center text-primary"> Clinics by Pablo</h1>

    <br>
    <div class="text-center">
        <br>
        <h2>Bienvenido a la aplicación clinics_app.</h2>
        <br>
        <a href="index" class="btn btn-outline-success btn-lg">Acceder</a>

    </div>
</body>

</html>
