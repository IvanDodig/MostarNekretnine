@extends('layouts.app')

@section('content')
<div class="form">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('password.email') }}" method="POST" class="form__login">
		@csrf
        <div class="form__login--row">
            <div class="form__login--heading heading-2">Resetiraj lozinku</div>
        </div>
        <div class="form__login--row">
            <label for="email">E-mail Adresa</label>
        </div>
        <div class="form__login--row">
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">{{ __('Posalji zahtjev za resetiranje') }}</button>
        </div>
    </form>
</div>

@endsection


