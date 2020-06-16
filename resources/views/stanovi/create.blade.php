@extends('layouts.app')

@section('content')

<div class="form form__create">


    <form action="{{ route('spremi') }}" method="post" class="form__login form__create--login">
        @csrf

        <div class="form__login--heading">Objavi stan!</div>


        <div class="form__login--col">
            <div class="form__login--row">
                <label for="name">Naziv stana</label>
                <input type="text" name="naziv" id="name" autofocus placeholder="naziv">
            </div>
            <div class="form__login--row">
                <label for="price">Cijena stana</label>
                <input type="text" name="cijena_stana" id="price" autofocus placeholder="cijena">
            </div>
            <div class="form__login--row">
                <label for="location">Lokacija stana</label>
                <input type="text" name="lokacija" id="location" autofocus placeholder="lokacija">
            </div>

        </div>

        <div class="form__login--col">
            <div class="form__login--row">
                <label for="dimensions">Dimenzije stana</label>
                <input type="text" name="kvadratura" id="dimensions" autofocus placeholder="50m2">
            </div>
            <div class="form__login--row">
                <label for="internet">Internet</label>
                <input type="text" name="internet" id="internet" autofocus placeholder="Da/Ne">
            </div>
            <div class="form__login--row">
                <label for="desc">Opis</label>
                <input type="text" name="opis" id="desc" autofocus placeholder="Opis...">
            </div>
        </div>
        <div class="form__login--button">
            <button type="submit" class="btn btn--create">Postavi stan</button>
        </div>

    </form>
</div>


@endsection
