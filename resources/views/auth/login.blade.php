@extends('layouts.app')

@section('content')


<div class="form">
    <form action="{{ route('login') }}" method="POST" class="form__login">
        @csrf
        <div class="form__login--row">
            <div class="form__login--heading heading-2">Login</div>
        </div>
        <div class="form__login--row">
            <label for="email">E-mail Address</label>
        </div>
        <div class="form__login--row">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@gmail.com" autofocus>
        </div>
        @error('email')
        <div class="form__login--row">
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        </div>
        @enderror
        <div class="form__login--row">
            <label for="password">Password</label>
        </div>
        <div class="form__login--row">
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">Login</button>
        </div>
        @if (Route::has('password.request'))
        <div class="form__login--row">
                <a class="btn-primary btn-primary--sec" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
        </div>
        @endif
        <div class="form__login--row form__login--bottom">
            <span class="message--1">Dont have an account?</span>
            <span class="message--2"><a href="{{ route('register') }}">Sign up!</a> </span>
        </div>
    </form>
</div>


{{-- <login></login> --}}
@endsection
