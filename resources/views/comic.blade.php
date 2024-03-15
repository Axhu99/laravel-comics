@extends('layouts.main')

@section('title', 'super')


@section('main-content')
    <section id="product-detail" class="container">
        <figure class="focus-comic">
            <img src="{{ $comic['thumb'] }}" alt="">
        </figure>


        <div class="details">
            <div class="info">
                <h1>{{ $comic['title'] }}</h1>

                <div class="price">
                    {{ $comic['price'] }}
                </div>
                <p class="description">{{ $comic['description'] }}</p>
            </div>

            <figure class="adv">
                <img src="" alt="">
            </figure>
        </div>
    </section>

@endsection
