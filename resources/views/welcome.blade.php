@extends('layouts.app')

@section('content')

<main>
    <div class="side">
        <div class="side__filter">
            <input type="search" name="search" id="search" class="side__filter--search">

        </div>
    </div>
    <div class="showcase">
        <div class="home">
            <img src="{{ asset('img/gal-1.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <button class="btn home__btn">Book Now</button>
        </div>
        <div class="home">
            <img src="{{ asset('img/gal-2.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <button class="btn home__btn">Book Now</button>
        </div>
        <div class="home">
            <img src="{{ asset('img/gal-3.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <button class="btn home__btn">Book Now</button>
        </div>
        <div class="home">

            <img src="{{ asset('img/gal-4.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <button class="btn home__btn">Book Now</button>
        </div>
    </div>
</main>
@endsection
