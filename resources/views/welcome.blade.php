<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<main class="flex h-screen items-center justify-center flex-col">
    <img src=" {{ asset('img/logo.webp') }}" alt="logo" class="w-2/12">
    <span class="text-4xl font-bold text-customBlue">Bienvenue sur notre site</span>
    <div class="row mt-4">
        <button onclick="window.location.href='{{ route('register') }}'" class="bg-customBlue text-white py-2 px-4 rounded hover:bg-customOrange">Inscription</button>
        <button onclick="window.location.href='{{ route('login') }}'" class="bg-customBlue text-white py-2 px-4 rounded hover:bg-customOrange">Connexion</button>
    </div>
</main>
</body>
</html>
