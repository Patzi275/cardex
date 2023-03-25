@extends('layouts.master')

@section('title', 'A propos')

@section('main')
@php
$car_name = $car->brand.' '.$car->model
@endphp
<main class="main">
    <div class="container">
        <section class="row row--grid">
            <!-- breadcrumb -->
            <div class="col-12">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="{{ route('home.index') }}">Accueil</a></li>
                    <li class="breadcrumb__item"><a href="{{ route('car.index') }}">Voitures</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">{{ $car_name }} </li>
                </ul>
            </div>
            <!-- end breadcrumb -->
            
            

            <!-- title -->
            <div class="col-12">
                <div class="main__title main__title--page">
                    <h1>{{ $car_name }}</h1>
                </div>
            </div>
            <!-- end title -->

            @if (session('success'))
            <!-- title -->
            <div class="col-12">
                <div class="alert alert-success">{{ session('success') }}</div>
            </div>
            <!-- end title -->
            @endif

            <!-- details -->
            <div class="col-12 col-lg-7">
                <div class="details">
                    <div class="splide splide--details details__slider">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path>
                                </svg></button>
                            <button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                                </svg></button>
                        </div>

                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{ Storage::url($car->image_url) }}" alt="">
                                </li>
                                @foreach ($car->secondaryImages as $image)
                                <li class="splide__slide">
                                    <img src="{{ Storage::url($image->url) }}" alt="">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <ul id="thumbnails" class="thumbnails">
                        <li class="thumbnail">
                            <img src="{{ Storage::url($car->image_url) }}" alt="">
                        </li>
                        @foreach ($car->secondaryImages as $image)
                        <li class="thumbnail">
                            <img src="{{ Storage::url($image->url) }}" alt="">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- end details -->

            <!-- offer -->
            <div class="col-12 col-lg-5">
                <div class="offer">
                    <span class="offer__title">Offre</span>
                    <div class="offer__wrap">
                        <span class="offer__price">{{ intval($car->daily_rate) }} FCFA <sub>/ jour</sub></span>
                        @if ($car->available)
                        <a href="#" class="offer__rent open-modal" id="rent-btn"><span>Louer</span></a>
                        @else
                        <p style="margin-right: 10px">Indisponible</p>
                        @endif
                    </div>

                    <span class="offer__title">Termes du contrat</span>
                    <form id='rent-form' class="offer__list" action="{{ route('rent.store', ['id' => $car->id]) }}" method="post">
                        @csrf
                        <ul class="offer__list">
                            <li>
                                <span class="offer__list-name">Jour de début </span>
                                <div class="sign__group">
                                    <input type="date" id="start_date" name="start_date" class="sign__input" required min="{{ now()->format('Y-m-d') }}">
                                </div>
                            </li>
                            <li>
                                <span class="offer__list-name">Jour de fin </span>
                                <div class="sign__group">
                                    <input type="date" id="end_date" name="end_date" class="sign__input" placeholder="Jour de retour" required>
                                </div>
                            </li>
                            <li>
                                <span class="offer__list-name">Méthode de payement </span>
                                <div class="sign__group">
                                    <ul class="sign__radio">
                                        <li>
                                            <input id="type1" type="radio" value="visa" name="payement_method" checked="">
                                            <label for="type1">Visa</label>
                                        </li>
                                        <li>
                                            <input id="type2" type="radio" value="mastercard" name="payement_method">
                                            <label for="type2">Mastercard</label>
                                        </li>
                                        <li>
                                            <input id="type3" type="radio" value="paypal" name="payement_method">
                                            <label for="type3">Paypal</label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </form>


                    <span class="offer__title">Détails de la voitures</span>
                    <ul class="offer__details">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path>
                            </svg>
                            <span>{{ $car->passenger_capacity }} personnes</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"></path>
                            </svg>
                            <span>{{ $car->fuel_type }}</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"></path>
                            </svg>
                            <span>{{ $car->kilometers_per_liter }}km / 1-litre</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"></path>
                            </svg>
                            <span>{{ $car->transmission_type }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end offer -->
        </section>
    </div>
    <!--
    You may like
    -->
</main>
<!-- end main content -->
@endsection

@section('script')
<script>
    let rent_button = document.getElementById('rent-btn');
    rent_button.onclick = function(e) {
        e.preventDefault();
        document.getElementById('rent-form').submit();
    }   
</script>


@endsection