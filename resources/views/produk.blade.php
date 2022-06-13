@extends('layouts.app')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/slider_1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/kerupuk_gepeng.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./images/kerupuk_bunder.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>

  <div class="container mt-4">
    <div class="row">
        @foreach ($produks as $produk)
            <div class="col-md-3 mb-4">
                <div class="card">
                    {{-- <img src="./images/kerupuk_tenggiri_mangkok.png" class="card-img-top" alt="..."> --}}
                    <img src="{{ asset('upload/produks/' . $produk->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <p class="card-text">{{ $produk->name_produk }}</p>
                    <h5 class="card-title">{{ $produk->price }}</h5>
                    <div class="d-flex">
                        <img src="./images/star.svg" alt="" srcset="">
                        <p class="my-auto ml-1">
                        | terjual 750+
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
      {{-- <div class="col-md-3 mb-4">
        <div class="card">
          <img src="./images/kerupuk_tenggiri_mangkok.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Kerupuk Tengiri Pedas</p>
            <h5 class="card-title">Rp 10.000</h5>
            <div class="d-flex">
              <img src="./images/star.svg" alt="" srcset="">
              <p class="my-auto ml-1">
                | terjual 750+
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="./images/kerupuk_tenggiri_mangkok.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Kerupuk Tengiri Pedas</p>
            <h5 class="card-title">Rp 10.000</h5>
            <div class="d-flex">
              <img src="./images/star.svg" alt="" srcset="">
              <p class="my-auto ml-1">
                | terjual 750+
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="./images/kerupuk_tenggiri_mangkok.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Kerupuk Tengiri Pedas</p>
            <h5 class="card-title">Rp 10.000</h5>
            <div class="d-flex">
              <img src="./images/star.svg" alt="" srcset="">
              <p class="my-auto ml-1">
                | terjual 750+
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="./images/kerupuk_tenggiri_mangkok.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Kerupuk Tengiri Pedas</p>
            <h5 class="card-title">Rp 10.000</h5>
            <div class="d-flex">
              <img src="./images/star.svg" alt="" srcset="">
              <p class="my-auto ml-1">
                | terjual 750+
              </p>
            </div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
@endsection
