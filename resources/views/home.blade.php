@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
      <div class="col-md-5 m-auto">
        <h1 class="color-theme-primary">KERUPUKTENGIRI.COM</h1>
        @foreach ($descriptions as $description)
            <p class="txt1">
                {{ $description->description_home }}
            </p>
        @endforeach
      </div>
      <div class="col-md-7">
        <img src="./images/kerupuk_tenggiri_header.png" class="img-fluid" alt="tenggiri">
      </div>
    </div>

    <div class="row my-3">
      <div class="col-md-12">
        <h1 class="text-center color-theme-primary">Produk Kami</h1>
      </div>
    </div>
    <div class="row">
        @foreach ($produkHomes as $produkHome)
            <div class="col-md-4 d-flex justify-content-center">
                <img class="border-radius img-fluid" src="{{ asset('/upload/home/'. $produkHome->image_produk) }}" alt="" srcset="">
            </div>
        @endforeach
    </div>

    <div class="row py-5">
      <div class="col-md-12">
        <a href="/produk" class="btn-product flex mx-auto">Produk Lain</a>
      </div>
    </div>

    <div class="row py-5">
      <div class="col-md-12">
        <h2 class="text-center color-theme-primary">Rekomendasi Penyajian</h2>
      </div>
    </div>

    <div class="row">
        @foreach ($suggestionHomes as $suggestionHome)
            <div class="col-md-6 d-flex justify-content-center">
                <img class="border-radius img-fluid" src="{{ asset('upload/home/'. $suggestionHome->image_suggestion) }}" alt="" srcset="">
            </div>
        @endforeach
    </div>
  </div>
@endsection
