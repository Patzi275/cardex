@extends('layouts.master')

@section('title', 'Accueil')

@section('main')

<!-- home -->
<div class="home">
  <div class="home__bg"></div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home__content">
          <h1 class="home__title">La location, <br>encore plus facile</h1>
          <p class="home__text">Le meilleur endroit pour louer une voiture facilement !</p>

          <form class="home__search" action="{{ route('car.index') }}" method="get">
            <div class="home__group">
              <label for="marque">Marque</label>
              <input type="text" name="brand" id="marque" placeholder="Quelle marque cherchez vous?" required>
            </div>
            
            <div class="home__group">
              <label for="model">Model</label>
              <input type="text" name="model" id="model" placeholder="Quel model desirez vous ?" required>
            </div>

            <div class="home__group">
              <label for="max_daily_rate">Prix journalier max</label>
              <input type="text" name="max_daily_rate" id="max_daily_rate" placeholder="Prix en FCFA" required>
            </div>


            <button type="submit"><span>Chercher</span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end home -->

<div class="container">
  <!-- cars -->
  <section class="row row--grid">
    <!-- title -->
    <div class="col-12">
      <div class="main__title main__title--first">
        <h2>Nos voitures</h2>

        <a href="{{ route('car.index') }}" class="main__link">Voir plus<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z" />
          </svg></a>
      </div>
    </div>
    <!-- end title -->
    @if (count($cars) == 0)
      <h2 style="color: gray; margin: auto">Vide</h2>
    @endif

    @foreach ($cars as $car)
    <!-- car -->
    <div class="col-12 col-md-6 col-xl-4">
      <div class="car">
        <div class="splide splide--card car__slider">
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
                <img src="{{ Storage::url($car->image_url) }}" alt="">
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="car__title">
          <h3 class="car__name"><a href="car.html">{{ $car->brand.' '.$car->model }}</a></h3>
          <span class="car__year">{{ $car->make_year }}</span>
        </div>
        <ul class="car__list">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z" />
            </svg>
            <span>{{ $car->passenger_capacity }} personnes</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z" />
            </svg>
            <span>{{ $car->fuel_type }}</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z" />
            </svg>
            <span>{{ $car->kilometers_per_liter }}km / 1-litre</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z" />
            </svg>
            <span>{{ $car->transmission_type }}</span>
          </li>
        </ul>
        <div class="car__footer">
          <span class="car__price">{{ intval($car->daily_rate) }} FCFA <sub>/ jour</sub></span>
          
          <a href="{{ route('car.show', ['id' => $car->id]) }}" class="car__more"><span>Details</span></a>
        </div>
      </div>
    </div>
    <!-- end car -->
    @endforeach
  </section>
  <!-- end cars -->

  <!-- get started -->
  <section class="row row--grid">
    <!-- title -->
    <div class="col-12">
      <div class="main__title">
        <h2>Commencez en 4 étapes simples</h2>
      </div>
    </div>
    <!-- end title -->

    <div class="col-12 col-md-6 col-xl-4">
      <div class="step1">
        <span class="step1__icon step1__icon--pink">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M21,10.5H20v-1a1,1,0,0,0-2,0v1H17a1,1,0,0,0,0,2h1v1a1,1,0,0,0,2,0v-1h1a1,1,0,0,0,0-2Zm-7.7,1.72A4.92,4.92,0,0,0,15,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,2,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,13.3,12.22ZM10,11.5a3,3,0,1,1,3-3A3,3,0,0,1,10,11.5Z" />
          </svg>
        </span>
        <h3 class="step1__title">Créez un profil</h3>
        @auth
          <p class="step1__text">Vous avez un compte ? Parfait, visitez notre parking<br><a href="{{ route('car.index') }}">Voitures</a></p>
        @endauth
        @guest
          <p class="step1__text">Pour faire une location, vous devez créer un compte<br><a href="{{ route('register.show') }}">Commencer</a></p>
        @endguest
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4">
      <div class="step1">
        <span class="step1__icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M6.62,13.08a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,8,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,6.62,13.08Zm13.14-4L18.4,5.05a3,3,0,0,0-2.84-2H8.44A3,3,0,0,0,5.6,5.05L4.24,9.11A3,3,0,0,0,2,12v4a3,3,0,0,0,2,2.82V20a1,1,0,0,0,2,0V19H18v1a1,1,0,0,0,2,0V18.82A3,3,0,0,0,22,16V12A3,3,0,0,0,19.76,9.11ZM7.49,5.68A1,1,0,0,1,8.44,5h7.12a1,1,0,0,1,1,.68L17.61,9H6.39ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-3.38-2.92a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3.9.9,0,0,0,.54-.54A.84.84,0,0,0,18,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,16.62,13.08ZM13,13H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
          </svg>
        </span>
        <h3 class="step1__title">Dîtes nous quelle voiture vous désirez</h3>
        <p class="step1__text">Nous avons une gamme assez complète de véhicule à mettre à votre disposition</p>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4">
      <div class="step1">
        <span class="step1__icon step1__icon--purple">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M20.71,16.71l-2.42-2.42a1,1,0,0,0-1.42,0l-3.58,3.58a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1h2.42a1,1,0,0,0,.71-.29l3.58-3.58A1,1,0,0,0,20.71,16.71ZM16,20H15V19l2.58-2.58,1,1Zm-6,0H6a1,1,0,0,1-1-1V5A1,1,0,0,1,6,4h5V7a3,3,0,0,0,3,3h3v1a1,1,0,0,0,2,0V9s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.07,1.07,0,0,0-.19-.28h0l-6-6h0a1.07,1.07,0,0,0-.28-.19.32.32,0,0,0-.09,0L12.06,2H6A3,3,0,0,0,3,5V19a3,3,0,0,0,3,3h4a1,1,0,0,0,0-2ZM13,5.41,15.59,8H14a1,1,0,0,1-1-1ZM8,14h6a1,1,0,0,0,0-2H8a1,1,0,0,0,0,2Zm0-4H9A1,1,0,0,0,9,8H8a1,1,0,0,0,0,2Zm2,6H8a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z" />
          </svg>
        </span>
        <h3 class="step1__title">Validez un contrat</h3>
        <p class="step1__text">Confirmez vos contrat de location et venez récuper votre véhicule</p>
      </div>
    </div>
  </section>
  <!-- end get started -->
</div>
@endsection