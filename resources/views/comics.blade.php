<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="jumbotron">
            <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
        </div>
        <div>
            <h5 class="jumbotron-heading">current series</h5>
        </div>
        <div class="boxes cont-comics">
            @foreach ($comics as $comic)
                <div class="comics-card">
                    <div class="img-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="text-comics text-light"> {{ $comic['series'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button>
                Load More
            </button>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
