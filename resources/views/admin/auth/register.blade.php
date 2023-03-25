@extends('layouts.base')

@section('title', 'Inscription')

@section('body')
<!-- main content -->
<main class="main main--sign" data-bg="img/bg/bg.png">   
<!-- registration form -->
    <div class="sign">
        <div class="sign__content">
            <form action="{{ route('admin.register.perform') }}" method="POST" class="sign__form">
                @csrf
                <h2>Administration</h2> 
                <a href="{{ route('home.index') }}" class="sign__logo">
                    <img src="{{ asset('img/logo.svg') }}" alt="">
                </a>

                @if ($errors->has('username'))
                    <span class="text-danger text-center">{{ $errors->first('username') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="username" class="sign__input" placeholder=" Nom d'administrateur">
                </div>
    
                @if ($errors->has('fullname'))
                    <span class="text-danger text-center">{{ $errors->first('fullname') }}</span>
                @endif
                <div class="sign__group">
                    <input type="text" name="fullname" class="sign__input" placeholder="Nom complet">
                </div>
                
                @if ($errors->has('email'))
                    <span class="text-danger text-center">{{ $errors->first('email') }}</span>
                @endif
                <div class="sign__group">
                    <input type="email" name="email" class="sign__input" placeholder="Email">
                </div>

                @if ($errors->has('password'))
                    <span class="text-danger text-center">{{ $errors->first('password') }}</span>
                @endif
                <div class="sign__group">
                    <input type="password" name="password" class="sign__input" placeholder="Mot de passe">
                </div>


                <button class="sign__btn" type="submit"><span>S'inscrire</span></button>

                <span class="sign__text">Avez vous deja un compte ? <a href="{{ route('admin.login.show') }}">Connectez vous!</a></span>
            </form>
        </div>
    </div>
    <!-- end registration form -->
</main>
<!-- end main content -->
@endsection