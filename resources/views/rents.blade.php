@extends('layouts.master')

@section('title', 'Historique')

@section('main')

<div class="container">
  <div class="row row--grid">
    <!-- breadcrumb -->
    <div class="col-12">
      <ul class="breadcrumb">
        <li class="breadcrumb__item"><a href="{{ route('home.index') }}">Accueil</a></li>
        <li class="breadcrumb__item breadcrumb__item--active">Historique</li>
      </ul>
    </div>
    <!-- end breadcrumb -->

    <!-- title -->
    <div class="col-12">
      <div class="main__title main__title--page">
        <h1>Historique</h1>
      </div>
    </div>
    <!-- end title -->
  </div>

  <div class="row row--grid">
    <div class="col-12">
      <!-- content tabs -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
          <div class="row row--grid">
            <div class="col-12">
              <!-- cart -->
              <div class="cart">
                <div class="cart__table-wrap">
                  <div class="cart__table-scroll">
                    <table class="cart__table">
                      <thead>
                        <tr>
                          <th>Voitures</th>
                          <th></th>
                          <th>Date de debut</th>
                          <th>Date de fin</th>
                          <th>Statut du payement</th>
                          <th>Méthode de payement</th>
                          <th>Total</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($rents as $rent)
                        <tr>
                          <td>
                            <div class="cart__img">
                              <img src="{{ Storage::url($rent->image_url) }}" alt="">
                            </div>
                          </td>
                          <td><a href="{{ route('car.show', ['id' => $rent->id]) }}">{{ $rent->brand.' '.$rent->model }}</a></td>
                          <td>{{ $rent->start_date}}</td>
                          <td>{{ $rent->end_date}}</td>
                          <td>{{ $rent->payement_status}}</td>
                          <td>{{ $rent->payement_method}}</td>
                          <td>{{ intval($rent->total_cost) }} FCFA</td>
                          <td><a href="{{ route('rent.destroy', ['id' => $rent->id]) }}">Rendre</a></td>
                          <td></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end cart -->
            </div>
          </div>

          
        </div>
      </div>
      <!-- end content tabs -->
    </div>
  </div>
</div>

@endsection