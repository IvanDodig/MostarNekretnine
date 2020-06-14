@extends('layouts.app')

@section('content')

<main>


    <sidebar></sidebar>
    <div class="showcase">
        <div class="home">
            <img src="{{ asset('img/gal-1.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a href="{{ url('/details') }}" class="btn home__btn">Book Now</a>
        </div>
        <div class="home">
            <img src="{{ asset('img/gal-2.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a href="{{ url('/details') }}" class="btn home__btn">Book Now</a>
        </div>
        <div class="home">
            <img src="{{ asset('img/gal-3.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a href="{{ url('/details') }}" class="btn home__btn">Book Now</a>
        </div>
        <div class="home">

            <img src="{{ asset('img/gal-4.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a  href="{{ url('/details') }}" class="btn home__btn">Book Now</a>
        </div>
    </div>

    <div class="pagination">
        <a href="#">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</main>
@endsection
