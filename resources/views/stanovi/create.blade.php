@extends('layouts.app')

@section('content')

<div class="form form__create">


    <form action="{{ route('spremi') }}" method="post" class="form__login form__create--login" enctype="multipart/form-data">
        @csrf

        <div class="form__login--heading heading-2">Objavi stan!</div>


        <div class="form__login--col">
            <div class="form__login--row">
                <label for="name">Naziv stana</label>
                <input type="text" name="naziv" id="name" autofocus placeholder="naziv" required>
            </div>
            <div class="form__login--row">
                <label for="price">Cijena stana</label>
                <input type="number" name="cijena_stana" id="price" autofocus placeholder="cijena" required>
            </div>
            <div class="form__login--row">
                <label for="location">Lokacija stana</label>
                <input type="text" name="lokacija" id="location" autofocus placeholder="lokacija" required>
            </div>

        </div>

        <div class="form__login--col">
            <div class="form__login--row">
                <label for="dimensions">Dimenzije</label>
                <input type="number" name="kvadratura" id="dimensions" autofocus placeholder="50m2" required>
            </div>
            <div class="form__login--row">Internet</div>
            <div class="form__login--row radio-buttons">
                <div class="radio" id="internet">
                    <input type="radio" name="internet" id="internetY" autofocus value="yes">
                    <label for="internetY">Da</label>
                    <div class="check"></div>
                </div>
                <div class="radio" id="internet">
                    <input type="radio" name="internet" id="internetN" autofocus value="no">
                    <label for="internetN">Ne</label>
                    <div class="check"></div>
                </div>
            </div>
            <div class="form__login--row">
                <label for="desc">Opis</label>
                <input type="text" name="opis" id="desc" autofocus placeholder="Opis...">
            </div>

        </div>
        <div class="form__login--file-label">
            <label for="photo">Fotografija</label>
        </div>
        <div class="form__login--file">
            <label for="photo">&nbsp;</label>
            <input type="file" name="fotografija[]" multiple id="photo" required>
        </div>
        <div class="form__login--row files">

        </div>
        <div class="form__login--button">
            <button type="submit" class="btn btn-primary">Postavi stan</button>
        </div>

    </form>
</div>


@endsection
