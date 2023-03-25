@extends('admin.layouts.master')

@section('title', "Voir {{ $user->first_name.' '.$user->last_name }}")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Détails sur l'utilisateur</h1>
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
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Prénom :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->first_name }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nom :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->last_name }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Téléphone :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->phone }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Date de naissance :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->date_of_birth }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Mot de passe :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user->password }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9 text-secondary">
                            <a type="button" class="btn btn-primary mr-2" href="{{ route('admin.user.edit', ['id' => $user->id]) }}">Modifier</a>
                            <button type="button" class="btn btn-danger" onclick="if(confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?')) { document.getElementById('delete-form').submit(); }">Supprimer</button>
                            <form id="delete-form" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection