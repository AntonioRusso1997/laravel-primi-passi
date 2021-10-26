<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Primi Passi</title>

    </head>
    <body>
        <header>
            <a class="logo" href="/"><img src="https://i.ibb.co/4gzmdRG/LOGO-B-B.png" alt="Logo Principale"></a>
            <div class="navbar">
                <ul>
                    <li> <a href="{{ route('home') }}">Home</a></li>
                    <li> <a href="{{ route('personaggi') }}">Characters</a></li>
                    <li> <a href="{{ route('stagioni') }}">Seasons</a></li>
                    <li> <a href="{{ route('boolean') }}">Boolean</a></li>
                </ul>
            </div>
        </header>

        <hr>

        <main class="main-container">
            <h1>{{ $title }}</h1>

            <img src="{{ $photo }}" alt="banner boolean">

            <p>{{ $text }}</p>
        </main>

    </body>

    <style>
        body {
            background-image: url(https://img3.goodfon.com/wallpaper/nbig/3/66/lego-breaking-bad-walter.jpg);
            background-size: cover;
        }

        header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 250px;
        }

        hr {
            width: 50%;
        }

        .logo {
            height: 80%;
        }

        .logo img {
            height: 100%;
        }

        .navbar ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            list-style: none;
        }

        .navbar a {
            text-decoration: none;
            margin: 0 15px;
            font-size: 22px;
            text-transform: uppercase;
            color: white;
            font-weight: 700;
        }

        .navbar a:hover {
            color: #095632;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            color: white;
            font-size: 20px;
            width: 70%;
            padding: 0 20px;
        }
        .main-container h1 {
            text-transform: uppercase;
            margin: 10px 0;
        }
        .main-container p {
            line-height: 150%;
            text-align: center;
            margin: 0;
        }
        .main-container img {
            width: 100%;
            border-radius: 20px;
        }
    </style>
</html>
