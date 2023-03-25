@extends('admin.layouts.master')

@section('title', "Modifier location")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Modifier une location</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.rent.index') }}">Locations</a></li>
            <li class="breadcrumb-item active">Modifier {{ $rent->id }}</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Ici vous pouvez voir toute les voitures de notre parking.
            </div>
        </div>-->
        <div class="mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Location n{{ $rent->id }}</h4>
                </div>
                <div class="card-body">
                    En developpement...    
                </div>
            </div>

        </div>
    </div>
</main>
@endsection