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
        <form action="{{route('rezerviraj',$stan->id)}}" method="POST" class="form__login details__form--login">
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
                    <button type="submit" class="btn-primary">Rezerviraj</button>
                </div>
            </form>
        </div>
    </div>
    <form action="{{route('komentiraj',$stan->id)}}" method="POST" class="form__login form-details">
        @csrf
        <div class="form__login--row">
            <label for="review">Leave a review!</label>
        </div>
        <div class="form__login--row">
            <textarea name="review" id="review" cols="9" rows="5"></textarea>
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">Send</button>
        </div>
    </form>


    <div class="details__bottom">



     
        {{-- PETLJA ZA KOMENTARE --}}
        @foreach ($komentari as $kom)
            
            @php
                foreach($users as $user){
                    if($user->id == $kom->id_user){
                        $username = $user->name;
                    }
                }
            @endphp

            <figure class="review">
                <figcaption class="review__user">
                    <img src="{{asset('img/user-1.jpg')}}" alt="">
                </figcaption>
                <div class="review__desc">
                    <blockquote class="review__desc--text">
                        {{ $kom->komentar }}
                    </blockquote>
                    <div class="review__desc--info">
                        <div class="review__desc--name">{{$username}}</div>
                        <div class="review__desc--rating">9.2</div>
                    </div>
                </div>
            </figure>
        @endforeach
        {{-- KRAJ PETLJE ZA KOMENTARE --}}

        {{-- PAGINACIJA KOMENTARA --}}
        <div class="pagination">

            <a href="{{ $komentari->previousPageUrl() }}">
                <i class="fas fa-arrow-left"></i>
            </a>
    
            <a href="#" class="active">{{ $komentari->currentPage() }}</a>
    
            <a href="{{ $komentari->nextPageUrl() }}">
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>
        {{-- KRAJ PAGINACIJE KOMENTARA --}}

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
