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



        <div class="details__desc">
            <div class="details__desc-up">
                <div class="details__desc--name">
                    <p>{{$stan->naziv}}</p>
                    <span>Naziv</span>
                </div>
                @if ($stan->internet)
                <div class="details__desc--wifi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 7.244c3.071-3.24 7.314-5.244 12-5.244 4.687 0 8.929 2.004 12 5.244l-2.039 2.15c-2.549-2.688-6.071-4.352-9.961-4.352s-7.412 1.664-9.961 4.352l-2.039-2.15zm5.72 6.034c1.607-1.696 3.827-2.744 6.28-2.744s4.673 1.048 6.28 2.744l2.093-2.208c-2.143-2.261-5.103-3.659-8.373-3.659s-6.23 1.398-8.373 3.659l2.093 2.208zm3.658 3.859c.671-.708 1.598-1.145 2.622-1.145 1.023 0 1.951.437 2.622 1.145l2.057-2.17c-1.197-1.263-2.851-2.044-4.678-2.044s-3.481.782-4.678 2.044l2.055 2.17zm2.622 1.017c-1.062 0-1.923.861-1.923 1.923s.861 1.923 1.923 1.923 1.923-.861 1.923-1.923-.861-1.923-1.923-1.923z"/></svg>
                    <span>Wifi</span>
                </div>
                @endif

                <div class="details__desc--location">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
                    <span>{{$stan->lokacija}}</span>
                </div>


            </div>
            <div class="details__desc-down">
                <div class="details__desc--rooms">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M20 23h2v1h-20v-1h2v-23h16v23zm-1-22h-14v22h14l-10-1.954v-18.015l10-2.031zm-7 11h-2v1h2v-1z"/></svg>
                    <span>{{$stan->broj_soba}} sobe</span>
                </div>

                <div class="details__desc--price">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.628 21.412l5.969-5.97 1.458 3.71-12.34 4.848-4.808-12.238 9.721 9.65zm-1.276-21.412h-9.352v9.453l10.625 10.547 9.375-9.375-10.648-10.625zm4.025 9.476c-.415-.415-.865-.617-1.378-.617-.578 0-1.227.241-2.171.804-.682.41-1.118.584-1.456.584-.361 0-1.083-.408-.961-1.218.052-.345.25-.697.572-1.02.652-.651 1.544-.848 2.276-.106l.744-.744c-.476-.476-1.096-.792-1.761-.792-.566 0-1.125.227-1.663.677l-.626-.627-.698.699.653.652c-.569.826-.842 2.021.076 2.938 1.011 1.011 2.188.541 3.413-.232.6-.379 1.083-.563 1.475-.563.589 0 1.18.498 1.078 1.258-.052.386-.26.763-.621 1.122-.451.451-.904.679-1.347.679-.418 0-.747-.192-1.049-.462l-.739.739c.463.458 1.082.753 1.735.753.544 0 1.087-.201 1.612-.597l.54.538.697-.697-.52-.521c.743-.896 1.157-2.209.119-3.247zm-9.678-7.476c.938 0 1.699.761 1.699 1.699 0 .938-.761 1.699-1.699 1.699-.938 0-1.699-.761-1.699-1.699 0-.938.761-1.699 1.699-1.699z"/></svg>
                    <span>{{$stan->cijena_stana}} KM/dan</span>
                </div>
                <div class="details__desc--size">
                    <p>{{$stan->kvadratura}} &#13217;</p>
                    <span>Velicina</span>
                </div>
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
            <label for="review">Ostavi komentar!</label>
        </div>
        <div class="form__login--row">
            <textarea name="review" id="review" cols="9" rows="5" required></textarea>
        </div>
        <div class="form__login--row form-rating">
            <label for="review">Ocjena:</label>
            <input type="number" name="rating" id="rating" placeholder="1-10" min="1" max="10" step="0.1"></input>
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">Posalji</button>
        </div>
    </form>


    <div class="details__bottom ">
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
    </div>
</section>


@endsection
