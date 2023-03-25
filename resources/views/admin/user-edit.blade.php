@extends('admin.layouts.master')

@section('title', "Modifier {{ $user->first_name.' '.$user->last_name }}")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Modifier informations l'utilisateur</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Utilisateurs</a></li>
            <li class="breadcrumb-item active">{{ $user->first_name.' '.$user->last_name }}</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Ici vous pouvez voir toute les voitures de notre parking.
            </div>
        </div>-->
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-3 my-2 col-form-label">Prénom :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-sm-3 my-2 col-form-label">Nom :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 my-2 col-form-label">Téléphone :</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-sm-3 my-2 col-form-label">Date de naissance :</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $user->date_of_birth }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 my-2 col-form-label">Email :</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 my-2 col-form-label">Mot de passe :</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Laissez vide si vous ne voulez pas changer de mot de passe">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary mr-2" disabled>Enregistrer</button>
                                <button type="button" class="btn btn-secondary" >Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection