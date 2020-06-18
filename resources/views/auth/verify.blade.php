@extends('layouts.app')

@section('content')
<div class="form">
    <form action="{{ route('verification.resend') }}" method="POST" class="form__login">
		@csrf
        <div class="form__login--row">
            <div class="form__login--heading heading-2">Verify your email address</div>
        </div>
        <div class="form__login--row">
            @if (session('resent'))
                <div>
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
        </div>
        <div class="form__login--row">
            <button type="submit" class="btn btn--primary">Click here to request another</button>
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
