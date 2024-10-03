<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Accueil</title>
</head>
<body class="flex items-center justify-center h-screen">
<main class="flex flex-col items-center justify-center text-center">
    <img src="{{ asset('img/logo.webp') }}" alt="logo" class="w-2/12 mb-4">
    <span class="text-4xl font-bold text-customBlue mb-8">Bienvenue sur notre site</span>
    @guest
        <div class="flex space-x-4">
            <button onclick="window.location.href='{{ route('register') }}'" class="bg-customBlue text-white py-2 px-4 rounded hover:bg-customOrange">Inscription</button>
            <button onclick="window.location.href='{{ route('login') }}'" class="bg-customBlue text-white py-2 px-4 rounded hover:bg-customOrange">Connexion</button>
        </div>
    @endguest
    @auth
        <script>
            window.location.href = '{{ route('dashboard') }}';
        </script>
    @endauth
</main>
</body>
</html>
