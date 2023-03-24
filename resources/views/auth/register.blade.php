@extends('layouts.base')

@section('title', 'Inscription')

@section('body')
<!-- main content -->
<main class="main main--sign" data-bg="img/bg/bg.png">
    <!-- registration form -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('register.perform') }}" method="POST" class="sign__form">
                @csrf
                <a href="{{ route('home.index') }}" class="sign__logo">
                    <img src="img/logo.svg" alt="">
                </a>

                @if ($errors->has('first_name'))
                    <span class="text-danger text-center">{{ $errors->first('first_name') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="first_name" class="sign__input" placeholder="Nom">
                </div>
    
                @if ($errors->has('last_name'))
                    <span class="text-danger text-center">{{ $errors->first('last_name') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="last_name" class="sign__input" placeholder="Prénom">
                </div>
                
                @if ($errors->has('email'))
                    <span class="text-danger text-center">{{ $errors->first('email') }}</span>
                @endif
                <div class="sign__group">
                    <input type="email" name="email" class="sign__input" placeholder="Email">
                </div>

                @if ($errors->has('phone'))
                    <span class="text-danger text-center">{{ $errors->first('phone') }}</span>
                @endif
                <div class="sign__group">
                    <input type="tel" name="phone" class="sign__input" placeholder="Numéro de téléphone">
                </div>

                @if ($errors->has('date_of_birth'))
                    <span class="text-danger text-center">{{ $errors->first('date_of_birth') }}</span>
                @endif
                <div class="sign__group">
                    <input type="date" name="date_of_birth" class="sign__input" placeholder="Date de naissance">
                </div>

                @if ($errors->has('password'))
                    <span class="text-danger text-center">{{ $errors->first('password') }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Mot de passe">
                </div>


                <button class="sign__btn" type="submit"><span>S'inscrire</span></button>

                <span class="sign__text">Avez vous deja un compte ? <a href="{{ route('login.show') }}">Connectez vous!</a></span>
            </form>
        </div>
    </div>
    <!-- end registration form -->
</main>
<!-- end main content -->
@endsection