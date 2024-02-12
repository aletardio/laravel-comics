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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 content d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-row px-5">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}"
                            class="icons my-1" />
                        <div class="text-uppercase text-section text-light">digital comics</div>
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}"
                            class="icons my-1" />
                        <div class="text-uppercase text-section text-light">dc merchandise</div>
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}"
                            class="icons my-1" />
                        <div class="text-uppercase text-section text-light">subscription</div>
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}"
                            class="icons my-1" />
                        <div class="text-uppercase text-section text-light">comic shop locator</div>
                        <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}"
                            class="icons_visa my-1" />
                        <div class="text-uppercase text-section text-light">dc power visa</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
