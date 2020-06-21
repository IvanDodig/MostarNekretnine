@extends('layouts.app')


@section('content')

<section class="details">
    <div class="details__left">

        <div class="details__carousel js-flickity"
        data-flickity-options='{ "wrapAround": true, "lazyLoad": true, "autoPlay":true, "contain":true }'>
            @if ($stan->putanja)
                @foreach ($stan->putanja as $putanja)
                <div class="details__carousel--cell">
                    <img src="{{ asset('storage/fotografija/'.$putanja) }}" alt="Image">
                </div>
                @endforeach
            @else
            <div class="details__carousel--cell">
                <img src="{{ asset('storage/fotografija/noimage.jpg') }}" alt="Image">
            </div>
            @endif

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
                    <input type="date" id="date-in" name="date-in" autofocus >

                </div>
                <div class="form__login--row">
                    <label for="date-out">Datum iseljenja</label>
                </div>
                <div class="form__login--row">
                    <input id="date-out" type="date" name="date-out" autofocus>
                </div>
                <div class="form__login--row">
                    <button type="submit" class="btn btn--primary">Rezerviraj</button>
                </div>
            </form>
        </div>
    </div>
    <form action="/" class="form__login form-details">
        <div class="form__login--row">
            <label for="email">E-mail Address</label>
        </div>
        <div class="form__login--row">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@gmail.com">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form__login--row">
            <label for="review">Leave a review!</label>
        </div>
        <div class="form__login--row">
            <textarea name="review" id="review" cols="9" rows="5"></textarea>
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn btn--primary">Send</button>
        </div>
    </form>
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
