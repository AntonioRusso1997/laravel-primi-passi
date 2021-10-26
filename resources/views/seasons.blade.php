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

            <div class="card-container">
                @foreach ($seasons as $season)
                <div class="card">
                    <img class="char-photo" src="{{ $season['photo'] }}" alt="">
                    <div class="text-area">
                        <div class="name"><h1>{{ $season['title'] }}</h1></div>
                        <div class="fullname">Year: <span>{{ $season['year'] }}</span></div>
                    </div>
                </div>            
                @endforeach
            </div>

            
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

        .card-container {
            width: 100%;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .card {
            cursor: pointer;
            background-color: #095632;
            margin: 0 15px;
            width: calc((100% / 3) - 30px);
            border-radius: 20px;
            overflow: hidden;
            font-size: 16px;
            color: lightgray;
            box-shadow: 0px 0px 5px 8px rgba(178,156,10,0.5);
            margin: 15px;
        }
        .char-photo {
            width: 100%;
        }
        .text-area {
            padding: 10px;
        }
        .text-area span {
            font-size: 18px;
            margin-left: 10px;
            color: white;
        }
        .text-area h1 {
            color: white;
            text-transform: uppercase;
        }
        .text-area>div {
            margin: 10px 0;
        }
    </style>
</html>
