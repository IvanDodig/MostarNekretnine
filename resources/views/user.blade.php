@extends('layouts.app')

@section('content')

<div class="user-container">

    <div class="user-card">
        <div class="user-card__up">
            <div class="user-card__img">
                <img src="{{asset('img/user-1.jpg')}}" alt="User">
            </div>
            <div class="user-card__info">
                <div class="user-card__name">
                    Ime i prezime
                </div>
                <div class="user-card__email">
                    skiljo@gmail.com
                </div>
            </div>
        </div>

        <div class="user-card__down">
            Some details
        </div>

    </div>

</div>





@endsection
