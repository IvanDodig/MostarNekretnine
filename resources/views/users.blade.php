@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Users
        </div>


        @for ($i = 0; $i < 5; $i++)
            <p>The value of i is {{$i}}</p>
        @endfor
        @foreach ($nums as $num)
            {{$loop->index}}{{$num}}
        @endforeach
    </div>
</div>
@endsection
