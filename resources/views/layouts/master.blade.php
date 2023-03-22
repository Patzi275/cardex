@extends('layouts.base')

@section('body')
@include('layouts.partials.header')

<!-- main content -->
<main class="main">
  @yield('main')
</main>
<!-- end main content -->

@include('layouts.partials.footer')
@endsection