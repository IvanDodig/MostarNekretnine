@extends('layouts.app')

@section('content')



<div class="form">
    <form action="{{ route('register') }}" method="POST" class="form__login">
        @csrf
        <div class="form__login--row">
            <div class="form__login--heading heading-2">Registracija</div>
        </div>
        <div class="form__login--row">
            <label for="email">Ime</label>
        </div>

        <div class="form__login--row">
            <input type="text" id="name" name="name" value="{{ old('email') }}" required autocomplete="name" autofocus>
        </div>
        <div class="form__login--row">
            <label for="email">E-mail Adresa</label>
        </div>

        <div class="form__login--row">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form__login--row">
            <label for="password">Lozinka</label>
        </div>
        <div class="form__login--row">
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>
        <div class="form__login--row">
            <label for="password-confirm">Potvrdi lozinku</label>
        </div>
        <div class="form__login--row">
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" >
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">Register</button>
        </div>
        <div class="form__login--row form__login--bottom">
            <span class="message--2"><a href="{{ route('login') }}">Prijavi se!</a> </span>
        </div>

    </form>
</div>

{{-- <register></register> --}}
@endsection
