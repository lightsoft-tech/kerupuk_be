@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-5 py-3">
      <img src="./images/kerupuk_tenggiri_1.png" class="img-fluid w-100 border-radius" alt="Responsive image">
    </div>
    <div class="col-md-7 d-flex flex-column justify-content-center">
      <h2 class="card-text">Kerupuk Tengiri Pedas</h2>
      <h1 class="card-text my-3 color-theme-primary">Rp. 10.000</h1>
      <p class="txt1">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus perspiciatis aperiam et nemo voluptate
        magni laborum debitis quo nisi. Ab aliquid aut distinctio perspiciatis est modi placeat alias facilis ea!
      </p>
      <h5 class="color-theme-primary">
        Varian
      </h5>
      <div>
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
      </div>

      <div class="wrap-input100 validate-input mt-3">
        <label for="harga">
          <h5 class="color-theme-primary">
            Kuantitas
          </h5>
        </label>
        <input class="input100" type="number" name="price"  placeholder="Kuantitas" id="harga">
      </div>

      <div class="d-flex justify-content-end">
        <a href="login.html" class="btn-product ">Pesan Sekarang</a>
        <a href="login.html" class="btn-product ml-3" style="
            color: var(--primary);
            background-color:var(--secondary_variant)
          ">Batal</a>
      </div>
    </div>
  </div>
</div>
@endsection