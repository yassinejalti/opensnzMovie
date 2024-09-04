<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue sur Opensnz Movies</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            background-color: #101820;
            color: #ffffff;
            margin: 0;
            padding: 0;
            line-height: 1.5;
        }
        .bg-gray-50 {
            background-color: #101820;
        }
        .text-white {
            color: #ffffff;
        }
        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, rgba(16, 24, 32, 0.7), rgba(16, 24, 32, 1));
        }
        .p-6 {
            padding: 1.5rem;
        }
        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .text-center {
            text-align: center;
        }
        .font-semibold {
            font-weight: 600;
        }
        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .max-w-2xl {
            max-width: 42rem;
        }
        .relative {
            position: relative;
        }
        .min-h-screen {
            min-height: 100vh;
        }
        .flex {
            display: flex;
        }
        .items-center {
            align-items: center;
        }
        .justify-center {
            justify-content: center;
        }
        .bg-movie {
            background-image: url('https://example.com/your-movie-background.jpg');
            background-size: cover;
            background-position: center;
        }
        .rounded-lg {
            border-radius: 0.5rem;
        }
        .shadow-md {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: #ffffff;
            background-color: #1d4ed8;
            border-radius: 0.375rem;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>
    <div class="bg-gray-50 min-h-screen flex flex-col items-center justify-center">
        <div class="relative w-full max-w-2xl px-6 py-10 bg-gradient-to-b rounded-lg shadow-md">
            <header class="text-center">
                <h1 class="text-4xl font-semibold text-white">Bienvenue sur Opensnz Movies</h1>
                <p class="mt-4 text-xl text-white">Découvrez les derniers films et bien plus encore !</p>
                <div class="mt-6">
                    <a href="{{ route('login') }}" class="btn">Se connecter</a>&nbsp;
                    <a href="{{ route('register') }}" class="btn ml-4">S'inscrire</a>
                </div>
            </header>
        </div>
    </div>
</body>
</html>
