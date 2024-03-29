@extends('layouts.main')

@section('title', 'COMICS')


@section('main-content')
    <div class="container">
        <section class="title-current">
            <h1>current series</h1>
        </section>
        <div class="row">
            @foreach ($cards as $index => $card)
                <div class="col">
                    <a href="{{ url("/comic/$index") }}">
                        <figure>
                            <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                            <figcaption class="comic-title">
                                <h3>{{ $card['title'] }}</h3>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
        <section class="loadmore-button">
            <button>load more</button>
        </section>
    </div>

@endsection
