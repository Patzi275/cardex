@extends('admin.layouts.master')

@section('title', "Voir {{ $car->model }}")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Détails sur la voiture</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.car.index') }}">Voiture</a></li>
            <li class="breadcrumb-item active">{{ $car->model.' '.$car->brand }}</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Ici vous pouvez voir toute les voitures de notre parking.
            </div>
        </div>-->
        <div class="mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>{{ $car->brand }} {{ $car->model }}</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ Storage::url($car->image_url) }}" class="img-fluid" alt="Image principale de la voiture">
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Année de fabrication:</strong> {{ $car->make_year }}</li>
                                <li class="list-group-item"><strong>Nombre de sièges:</strong> {{ $car->passenger_capacity }}</li>
                                <li class="list-group-item"><strong>Kilomètres par litre:</strong> {{ $car->kilometers_per_liter }}</li>
                                <li class="list-group-item"><strong>Type de carburant:</strong> {{ $car->fuel_type }}</li>
                                <li class="list-group-item"><strong>Type de transmission:</strong> {{ $car->transmission_type }}</li>
                                <li class="list-group-item"><strong>Prix de location par jour:</strong> {{ $car->daily_rate }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Images secondaires:</h5>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($car->secondaryImages as $image)
                        <div class="col-md-4 mt-3">
                            <img src="{{ Storage::url($image->url) }}" class="img-fluid" alt="Image secondaire de la voiture">
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="text-center">
                                <a type="button" class="btn btn-primary mr-2 disabled" href="{{ route('admin.car.edit', ['id' => $car->id]) }}">Modifier</a>
                                <button type="button" class="btn btn-danger" onclick="if(confirm('Êtes-vous sûr de vouloir supprimer cette voiture?')) { document.getElementById('delete-form').submit(); }">Supprimer</button>
                                <form id="delete-form" action="{{ route('admin.car.destroy', ['id' => $car->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection