@extends('layouts.app')

@section('content')
<div class="form">
    <form action="{{ route('verification.resend') }}" method="POST" class="form__login">
		@csrf
        <div class="form__login--row">
            <div class="form__login--heading heading-2">Potvrdi svoju E-mail adresu</div>
        </div>
        <div class="form__login--row">
            @if (session('resent'))
                <div>
                    {{ __('Link za potvrdu je poslan na vasu e-mail adresu') }}
                </div>
            @endif
            {{ __('Prije nastavka, molimo provjerite e-mail za link potvrde ') }}

        </div>
        <div class="form__login--row">
            <button type="submit" class="btn-primary">{{ __('Klikni ovdje za slanje zahtjeva') }}</button>
        </div>
    </form>
</div>

@endsection


{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 --}}
