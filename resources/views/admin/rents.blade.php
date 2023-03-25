@extends('admin.layouts.master')

@section('title', 'Locations')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Liste des locations</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
            <li class="breadcrumb-item active">Locations</li>
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
                <a class="btn btn-primary m-3 disabled" href="{{ route('admin.rent.index') }}" role="button">Ajouter</a>
            </div>
            <div table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Debut</th>
                            <th>Fin</th>
                            <th>Coût total</th>
                            <th>Statut du payement</th>
                            <th>Méthode de payement</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rents as $rent)
                        <tr>
                            <td>{{ $rent->id }}</td>
                            <td>{{ $rent->start_date}}</td>
                            <td>{{ $rent->end_date }}</td>
                            <td>{{ $rent->total_cost }} FCFA</td>
                            <td>{{ $rent->payement_status }}</td>
                            <td>{{ $rent->payement_method }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.rent.show', ['id' => $rent->id]) }}">Voir</a></li>
                                        <li><a class="dropdown-item disabled" href="{{ route('admin.rent.edit', ['id' => $rent->id]) }}">Modifier</a></li>
                                        <li><button type="button" class="dropdown-item" onclick="if(confirm('Êtes-vous sûr de vouloir supprimer cette location?')) { document.getElementById('delete-form').submit(); }">Supprimer</button>
                                            <form id="delete-form" action="{{ route('admin.rent.destroy', ['id' => $rent->id]) }}" method="POST" style="display: none;">
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
                {{ $rents->links() }}
            </div>
        </div>
    </div>
</main>
@endsection