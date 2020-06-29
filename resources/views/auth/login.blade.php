@extends('layouts.app')

@section('content')


<div class="form">
    <form action="{{ route('login') }}" method="POST" class="form__login">
        @csrf
        <div class="form__login--row">
            <div class="form__login--heading heading-2">Prijava</div>
        </div>
        <div class="form__login--row">
            <label for="email">E-mail Adresa</label>
        </div>
        <div class="form__login--row">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        @error('email')
        <div class="form__login--row">
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        </div>
        @enderror
        <div class="form__login--row">
            <label for="password">Lozinka</label>
        </div>
        <div class="form__login--row">
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">Prijavi se</button>
        </div>
        @if (Route::has('password.request'))
        <div class="form__login--row">
                <a class="btn-primary btn-primary--sec" href="{{ route('password.request') }}">
                    Zaboravili ste lozinku?
                </a>
        </div>
        @endif
        <div class="form__login--row form__login--bottom">
            <span class="message--1">Nemas racun?</span>
            <span class="message--2"><a href="{{ route('register') }}">Registriraj se!</a> </span>
        </div>
    </form>
</div>


{{-- <login></login> --}}
@endsection
