@extends('layouts.app')

@section('content')

<div class="users">
    <h1 class="heading-2 users-heading">All users</h1>

    @foreach ($users as $user)
        <div class="user">
            <div class="user-top">
                <div class="user__img"><img src="{{ asset('img/user-1.jpg') }}" alt="User 1"></div>
                <div class="user__name">{{$user->username}}</div>
                <div class="user__role">{{$user->role}}</div>
            </div>
            <div class="user-bottom">
                <a href="#" class="btn btn--users">Change role</a>
            </div>
        </div>
    @endforeach
    
</div>
@endsection
