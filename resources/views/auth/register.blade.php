@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-0" style="position: relative;">
    <div class="card col-md-5 mt-0 p-4" style="border: none; position: absolute; top: -130px;">
        <h3 class="text-center">Inscription</h3>
        <div class="card-body mt-0">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-3">
                    <div class="col mb-3">
                        <input id="name" type="text" class=" col-md-12 @error('name') is-invalid @enderror" name="name" placeholder="Nom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <input id="firstname" type="text" class=" col-md-12 @error('firstnamename') is-invalid @enderror" name="firstname" placeholder="prénom" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col mb-3">
                        <select name="role" class="col-md-12">
                            <option value="Choisissez un type de compte" disabled selected><span style=" font-weight: 500;margin-left: 30px;">Selectionnez un compte</span></option>
                            <option value="organisateur">Organisateur</option>
                            <option value="participant">Participant</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <input id="number" type="tel" class=" col-md-12 @error('number') is-invalid @enderror" name="number" placeholder="Contact" value="{{ old('number') }}" required autocomplete="number" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <input id="email" type="email" class=" col-md-12 @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <input id="password" type="password" class=" col-md-12 @error('password') is-invalid @enderror" placeholder="mot de passe" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col mb-3">
                        <input id="password-confirm" type="password" class=" col-md-12" name="password_confirmation" placeholder="confirmer mot de passe" required autocomplete="new-password">
                    </div>
                </div>
                <div class="row d-flex">
                    <input type="checkbox" name="accept" id="accept" required>
                    <p class="fs-5" style="margin-left: 30px;"><a href="">Politique d'utilisation et de confidentialité</a></p>
                </div>
                <div class="row d-flex">
                    <input type="checkbox" name="accept" id="accept" required>
                    <p class="fs-5" style="margin-left: 30px;"><a href="">Recevez nos Newletters</a></p>
                </div>
                <div class="row mb-0">
                    <div class="col">
                        <button type="submit" class=" fs-5 col-md-12 p-2 text-light" style="background:#c30f66; outline:none; border-radius: 10px; border:none;font-weight: 500;">
                            {{ __("S'inscrire") }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection