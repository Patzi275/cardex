@extends('admin.layouts.master')

@section('title', 'Utiisateurs')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Liste des utilisateurs</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
            <li class="breadcrumb-item active">Utilisateurs</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Ici vous pouvez voir toute les voitures de notre parking.
            </div>
        </div>-->
        <div class="mb-4">
            <div>
                <a class="btn btn-primary m-3 disabled" href="#" role="button" >Ajouter</a>
            </div>
            <div table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                            <th>Date de naissance</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name.' '.$user->last_name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.user.show', ['id' => $user->id]) }}">Voir</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.user.edit', ['id' => $user->id]) }}">Modifier</a></li>
                                        <li><a class="dropdown-item" href="#">Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</main>
@endsection