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
        <div class="comic-card">
            @foreach ($comics as $key => $comic)
                @if ($key === 2)
                    <img class="card" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                @endif
            @endforeach
        </div>
        <div class="line-blue"></div>
        <div class="container-fluid contents">
            <div class="container">
                <div class="row">
                    <div class="col-7">
                        @foreach ($comics as $key => $comic)
                            @if ($key === 2)
                                <div class="text-uppercase py-4">
                                    <h3>{{ $comic['title'] }} </h3>
                                </div>
                                <div class="row availability ">
                                    <div class="col-9">
                                        <div class="d-flex justify-content-between">
                                            <div class="py-3 px-2">
                                                <span class="text-green">
                                                    U.S. Price:
                                                </span>
                                                <span class="text-white fw-bold">
                                                    {{ $comic['price'] }}
                                                </span>
                                            </div>
                                            <div class="text-green fw-bold text-uppercase py-3">
                                                Available
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="btn-available text-center text-white border-start py-3">
                                            Check Availability
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </main>
    @include('partials.footer')
</body>

</html>
