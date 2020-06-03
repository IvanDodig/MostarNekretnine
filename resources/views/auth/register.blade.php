@extends('layouts.app')

@section('content')



<div class="form">
    <form action="{{ route('register') }}" method="POST" class="form__login">
        @csrf
        <div class="form__login--row">
            <div class="form__login--heading">Register</div>
        </div>
        <div class="form__login--row">
            <label for="email">Name</label>
        </div>

        <div class="form__login--row">
            <input type="text" id="name" name="name" value="{{ old('email') }}" required autocomplete="name" autofocus placeholder="Your name">
        </div>
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
            <label for="password">Password</label>
        </div>
        <div class="form__login--row">
            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="********">
        </div>
        <div class="form__login--row">
            <label for="password-confrim">Confirm password</label>

        </div>
        <div class="form__login--row">
            <input id="password-confirm" type="password" name="password-confirmation" required autocomplete="new-password" placeholder="********">
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
        <div class="form__login--row form__login--bottom">
            <span class="message--1">Dont have an account?</span>
            <span class="message--2"><a href="{{ route('register') }}">Sign up</a> </span>
        </div>

    </form>
</div>
@endsection
