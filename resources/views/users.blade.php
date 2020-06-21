@extends('layouts.app')

@section('content')

<div class="users">
    <h1 class="heading-2 users-heading">All users</h1>
    <div class="user">
        <div class="user-top">
            <div class="user__img"><img src="{{ asset('img/user-1.jpg') }}" alt="User 1"></div>
            <div class="user__name">Skiljo</div>
            <div class="user__role">Admin</div>
        </div>
        <div class="user-bottom">
            <a href="#" class="btn btn--users">Change role</a>
        </div>
    </div>
    <div class="user">
        <div class="user-top">
            <div class="user__img"><img src="{{ asset('img/user-1.jpg') }}" alt="User 1"></div>
            <div class="user__name">Skiljo</div>
            <div class="user__role">Admin</div>
        </div>
        <div class="user-bottom">
            <a href="#" class="btn btn--users">Change role</a>
        </div>
    </div>
    <div class="user">
        <div class="user-top">
            <div class="user__img"><img src="{{ asset('img/user-1.jpg') }}" alt="User 1"></div>
            <div class="user__name">Skiljo</div>
            <div class="user__role">Admin</div>
        </div>
        <div class="user-bottom">
            <a href="#" class="btn btn--users">Change role</a>
        </div>
    </div>


</div>
@endsection
