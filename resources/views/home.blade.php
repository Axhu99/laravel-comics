@extends('layouts.main')

@section('title', 'Home')


@section('main-content')
    <div class="container">
        <section class="title-current">
            <h1>current series</h1>
        </section>
        <div class="row">
            @foreach ($cards as $card)
                <div class="col">
                    <figure>
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        <figcaption class="comic-title">
                            <h3>{{ $card['title'] }}</h3>
                        </figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
        <section class="loadmore-button">
            <button>load more</button>
        </section>
    </div>

@endsection
