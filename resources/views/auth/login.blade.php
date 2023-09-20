@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-0" style="position: relative;">
    <div class="card col-md-4 mt-0" style="border: none; position: absolute; top: -60px;">
        <h3 class="text-center">Connexion</h3>
        <div class="card-body mt-0">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <button class="col-md-12" style="background:transparent; border: 3px solid #c30f66;padding:8px; border-radius:7px;font-weight:500;"><img src="" alt=""> Continuer avec Google</button>
                    </div>
                </div>
                <h4 class="text-center mb-3" style="font-weight: 300;">ou</h4>

                <div class="row mb-4">
                    <div class="col">
                        <input id="email" type="email" class=" col-md-12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email ou numéro de téléphone" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <input id="password" type="password" class=" col-md-12 @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                @if (Route::has('password.request'))
                <a class="btn btn-link text-primary" href="{{ route('password.request') }}" style="float:right; text-decoration: none; font-weight:500; margin-top: -18px;">
                    {{ __('Mot de passe oublié ?') }}
                </a>
                <br>
                <br>
                @endif
                <div class="row mb-0">
                    <div class="">
                        <button type="submit" class="col-md-12 p-2 text-light" id="soumettre" style="background:#c30f66; outline:none; border-radius: 10px; border:none;">
                            {{ __('Connexion') }}
                        </button>
                    </div>
                    <p class="text-center mt-3" style="font-weight: 500; padding: 7px;">Vous n'avez de compte ? <a href="{{route('register')}}" class="text-primary" style="text-decoration: none; font-weight:500;">Créer un compte</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection