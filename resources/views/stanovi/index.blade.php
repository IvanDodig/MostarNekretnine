@extends('layouts.app')

@section('content')

<main>


    <div class="add-button">
        <a class="btn"
            href="{{ url('/create') }}"
            type="submit">
            Objavi novi stan
        </a>
    </div>

    <sidebar></sidebar>

    <div class="showcase">

        @foreach ($stanovi as $stan)
            <div class="home">
                <img src="{{ asset('img/gal-1.jpeg') }}" alt="House 1">
                <div class="home__name">{{ $stan->naziv}}</div>
                <div class="home__location">Location</div>
                <div class="home__price">Price</div>
                <div class="home__area"> {{ $stan->lokacija }} </div>
                <div class="home__rooms"> {{ $stan->cijena_stana }} KM/dan </div>
                <a href="/stan/{{$stan->id}}">Stan {{$stan->id}} </a>
                <a class="btn home__btn" href="{{ route('pogledaj',$stan->id) }}">Book Now </a>

            </div>
        @endforeach


        <div class="home">
            <img src="{{ asset('img/gal-2.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a href="#" class="btn home__btn">Book Now</a>
        </div>
        <div class="home">
            <img src="{{ asset('img/gal-3.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a href="" class="btn home__btn">Book Now</a>
        </div>
        <div class="home">

            <img src="{{ asset('img/gal-4.jpeg') }}" alt="House 1">
            <div class="home__name">Name</div>
            <div class="home__location">Location</div>
            <div class="home__price">Price</div>
            <div class="home__area">100 m2</div>
            <div class="home__rooms">100 m2</div>
            <a  href="" class="btn home__btn">Book Now</a>
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
