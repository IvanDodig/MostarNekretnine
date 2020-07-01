@extends('layouts.app')

@section('content')

<main>
    {{-- hasrole blade provjerava ulogu korisnika  --}}
    @hasrole(['admin','author'])
        <div class="add-button">
            <a class="btn"
                href="{{ url('/create') }}"
                type="submit">
                Objavi novi stan
            </a>
        </div>
    @endhasrole

    <sidebar></sidebar>

    <div class="showcase">

        @foreach ($stanovi as $stan)

            <div class="home">
                @if ($stan->putanja)

                    <?php
                        $slika = $stan->putanja;
                        $rand_slika = array_rand($slika, 1);
                        $rand_slika = $slika[$rand_slika];
                    ?>

                        <img src="{{ asset('storage/fotografija/'.$rand_slika) }}"  alt="House 1">
                        {{-- <img src="{{ asset('img/gal-1.jpeg') }}" alt="House 1"> --}}

                @else

                        <img src="{{ asset('storage/fotografija/noimage.jpg') }}" alt="House 1">
                        {{-- <img src="{{ asset('img/gal-1.jpeg') }}" alt="House 1"> --}}

                @endif
                <div class="home__name">{{ $stan->naziv}}</div>
                <div class="home__location">{{ $stan->lokacija }}</div>
                <div class="home__price">{{ $stan->cijena_stana }} KM/dan</div>
                <div class="home__area"> {{ $stan->kvadratura }} &#13217;</div>
                <div class="home__rooms"> {{ $stan->broj_soba }} sobe</div>
                <a class="btn home__btn" href="{{ route('pogledaj',$stan->id) }}">Rezerviraj</a>

                @hasrole(['admin','author'])
                <div class="home__edit">
                  {{--   <a class="btn-secondary home__btn--sec" href="{{ route('edit',$stan->id) }}"> Uredi </a> --}}
                    <form action="{{ route('izbrisi', $stan->id) }}" method="post" >
                        @csrf
                        <input type="hidden" name="_method" value="delete"/>
                        <input class="btn-secondary home__btn--sec" type="submit" name="izbrisi" value="Izbriši">
                    </form>
                </div>
                @endhasrole


            </div>
        @endforeach

    </div>

    <div class="pagination">

        <a href="{{ $stanovi->previousPageUrl() }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 12l9-8v6h15v4h-15v6z"/></svg>
        </a>
        <a href="#" class="active">{{ $stanovi->currentPage() }}</a>

        <a href="{{ $stanovi->nextPageUrl() }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 12l-11-8v6h-13v4h13v6z"/></svg>
        </a>
    </div>
</main>
@endsection
