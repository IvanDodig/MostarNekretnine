@extends('layouts.app')


@section('content')

<section class="details">
    <div class="details__left">

        <div class="details__carousel js-flickity"
        data-flickity-options='{ "wrapAround": true, "lazyLoad": true, "autoPlay":true, "contain":true }'>
            <div class="details__carousel--cell">
                <img src="{{ asset('img/gal-1.jpeg') }}" alt="Image">
            </div>
            <div class="details__carousel--cell">
                <img src="{{ asset('img/gal-2.jpeg') }}" alt="Image">
            </div>
            <div class="details__carousel--cell">
                <img src="{{ asset('img/gal-3.jpeg') }}" alt="Image">
            </div>
            <div class="details__carousel--cell">
                <img src="{{ asset('img/gal-4.jpeg') }}" alt="Image">
            </div>
        </div>


        <div class="details__about">
            <div class="details__about--heading">
                What our guests are saying about us!
            </div>
            <div class="details__about--desc">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, laudantium.
            </div>
        </div>

    </div>
    <div class="details__right">
        <div class="form details__form">
            <form action="" method="POST" class="form__login details__form--login">
                @csrf
                <div class="form__login--row">
                    <div class="form__login--heading heading-3">Rezerviraj stan!</div>
                </div>
                <div class="form__login--row">
                    <label for="date-in">Datum useljenja</label>
                </div>
                <div class="form__login--row">
                    <input type="text" id="date-in" name="date-in"  autofocus placeholder="1/1/2020">

                </div>
                <div class="form__login--row">
                    <label for="date-out">Datum iseljenja</label>
                </div>
                <div class="form__login--row">
                    <input id="date-out" type="text" name="date-out"  placeholder="1/1/2020">
                </div>
                <div class="form__login--row">
                    <button type="submit" class="btn btn--primary">Rezerviraj</button>
                </div>
            </form>
        </div>
    </div>
    <div class="details__bottom">
        <figure class="review">
            <figcaption class="review__user">
                <img src="{{asset('img/user-1.jpg')}}" alt="">
            </figcaption>
            <div class="review__desc">
                <blockquote class="review__desc--text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing.
                </blockquote>
                <div class="review__desc--info">
                    <div class="review__desc--name">Skiljo Skiljoni</div>
                    <div class="review__desc--rating">9.2</div>
                </div>
            </div>
        </figure>
        <figure class="review">
            <figcaption class="review__user">
                <img src="{{asset('img/user-1.jpg')}}" alt="">
            </figcaption>
            <div class="review__desc">
                <blockquote class="review__desc--text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing.
                </blockquote>
                <div class="review__desc--info">
                    <div class="review__desc--name">Skiljo Skiljoni</div>
                    <div class="review__desc--rating">9.2</div>
                </div>
            </div>
        </figure>
        <figure class="review">
            <figcaption class="review__user">
                <img src="{{asset('img/user-1.jpg')}}" alt="">
            </figcaption>
            <div class="review__desc">
                <blockquote class="review__desc--text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing.
                </blockquote>
                <div class="review__desc--info">
                    <div class="review__desc--name">Skiljo Skiljoni</div>
                    <div class="review__desc--rating">9.2</div>
                </div>
            </div>
        </figure>
    </div>
</section>


@endsection
