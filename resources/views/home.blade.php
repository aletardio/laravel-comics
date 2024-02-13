@extends('layout.app')

@section('content')
    <div class="jumbotron">
        <img class="jumbotron-image" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
    <div>
        <h5 class="jumbotron-heading">current series</h5>
    </div>
    <div class="boxes cont-comics">
        @foreach ($comics as $comic)
            <a class="link-offset-2 link-underline link-underline-opacity-0"
                href="{{ route('detail-comic', ['param' => $comic['id']]) }}">
                <div class="comics-card">
                    <div class="img-card">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="text-comics text-light"> {{ $comic['series'] }}</div>
                </div>
            </a>
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
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" class="icons my-1" />
                    <div class="text-uppercase text-section text-light">digital comics</div>
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" class="icons my-1" />
                    <div class="text-uppercase text-section text-light">dc merchandise</div>
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" class="icons my-1" />
                    <div class="text-uppercase text-section text-light">subscription</div>
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" class="icons my-1" />
                    <div class="text-uppercase text-section text-light">comic shop locator</div>
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" class="icons_visa my-1" />
                    <div class="text-uppercase text-section text-light">dc power visa</div>
                </div>
            </div>
        </div>
    </div>
@endsection
