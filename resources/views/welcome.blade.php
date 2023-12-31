@extends('layouts.layout')

@section('content')
<div class=" position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    {{-- <div class="content container flex-center position-ref full-height">
        <img src='/img/southvalley.jpg' alt="pizza logo">
        <div class="title m-b-md">
            The Valley's Best Pizza
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="{{ route('pizzas.create') }}">Order a pizza</a>
    </div>
</div> --}}

<div class="px-4 py-5 my-5 text-center full-height">
    <img class="d-block mx-auto mb-4" src='/img/southvalley.jpg' alt="" width="400" height="200">
    <h1 class="display-5 fw-bold text-body-emphasis">The Valley's Best Pizza</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">For over 20 years we have served the best pizza in the valley, we love our customers and we love our valley and are proud to serve the community.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <p class="mssg">{{ session('mssg') }}</p>
        <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('pizzas.create') }}">Order a pizza</a>
      </div>
    </div>
  </div>
@endsection