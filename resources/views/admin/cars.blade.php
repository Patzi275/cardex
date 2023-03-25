@extends('admin.layouts.master')

@section('title', 'Voitures')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Liste des véhicules</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
            <li class="breadcrumb-item active">Voitures</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Ici vous pouvez voir toute les voitures de notre parking.
            </div>
        </div>-->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="mb-4">
            <div>
                <a class="btn btn-primary m-3" href="{{ route('admin.car.create') }}" role="button">Ajouter</a>
            </div>
            <div table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Modèle</th>
                            <th>Marque</th>
                            <th>Prix par jour</th>
                            <th>Disponible</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>{{ $car->model}}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->daily_rate }}</td>
                            <td>{{ $car->available ? 'Vrai' : 'Faux' }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.car.show', ['id' => $car->id]) }}">Voir</a></li>
                                        <li><a class="dropdown-item disabled" href="{{ route('admin.car.edit', ['id' => $car->id]) }}">Modifier</a></li>
                                        <li><button type="button" class="dropdown-item" onclick="if(confirm('Êtes-vous sûr de vouloir supprimer cette voiture?')) { document.getElementById('delete-form').submit(); }">Supprimer</button>
                                            <form id="delete-form" action="{{ route('admin.car.destroy', ['id' => $car->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $cars->links() }}
            </div>
        </div>
    </div>
</main>
@endsection