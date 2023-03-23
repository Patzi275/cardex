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
                          <th>Années</th>
                          <th>Transmission</th>
                          <th>Type de carburant</th>
                          <th>Prix</th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>
                            <div class="cart__img">
                              <img src="img/cars/1-1.jpg" alt="">
                            </div>
                          </td>
                          <td><a href="car.html">Toyota RAV4</a></td>
                          <td>2021</td>
                          <td>Automatic</td>
                          <td>Hybrid</td>
                          <td><span class="cart__price">$380<span>$440</span></span></td>
                          <td><button class="cart__delete" type="button" aria-label="Delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                              </svg></button></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cart__img">
                              <img src="img/cars/2-1.jpg" alt="">
                            </div>
                          </td>
                          <td><a href="car.html">BMW 3 Series</a></td>
                          <td>2019</td>
                          <td>Automatic</td>
                          <td>Gasoline</td>
                          <td><span class="cart__price">$350</span></td>
                          <td><button class="cart__delete" type="button" aria-label="Delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                              </svg></button></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cart__img">
                              <img src="img/cars/3-1.jpg" alt="">
                            </div>
                          </td>
                          <td><a href="car.html">Volkswagen T-Cross</a></td>
                          <td>2020</td>
                          <td>Automatic</td>
                          <td>Gasoline</td>
                          <td><span class="cart__price">$400</span></td>
                          <td><button class="cart__delete" type="button" aria-label="Delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                              </svg></button></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="cart__img">
                              <img src="img/cars/4-1.jpg" alt="">
                            </div>
                          </td>
                          <td><a href="car.html">Cadillac Escalade</a></td>
                          <td>2020</td>
                          <td>Automatic</td>
                          <td>Gasoline</td>
                          <td><span class="cart__price">$570<span>$620</span></span></td>
                          <td><button class="cart__delete" type="button" aria-label="Delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                              </svg></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end cart -->
            </div>
          </div>

          <!-- paginator -->
          <div class="row row--grid">
            <div class="col-12">
              <div class="paginator">
                <span class="paginator__pages">4 sur 38</span>

                <ul class="paginator__list">
                  <li>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z" />
                      </svg></a>
                  </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
                      </svg></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end paginator -->
        </div>
      </div>
      <!-- end content tabs -->
    </div>
  </div>
</div>

@endsection