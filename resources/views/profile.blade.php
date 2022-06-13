@extends('layouts.main')

@section('style')
  <style>
    /* .profile-img {
      max-width: 150px;
      max-height: 150px;
      border: 5px solid #fff;
      border-radius: 50%;
      box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    } */
    .bg-profile-1{
      background-image: url('images/bg_profile_1.png');
      background-repeat: no-repeat;
      background-position-x: right;
      background-size: 20%
    }

    .bg-profile-2{
      background-image: url('images/bg_profile_2.png');
      background-repeat: no-repeat;
      background-position-x: left;
      background-position-y: bottom;
      background-size: 20%
    }

    .profile-custom{
      padding: 10vh 30vw ;
    }

    @media (max-width: 768px) {
      .profile-custom {
        padding: unset;
      }
    }

  </style>
@endsection

@section('content')
<div class="limiter bg-profile-1">
  <div class="bg-profile-2 profile-custom container-login100" style="background-color: transparent !important;">
    <div class="card-custom" style="padding: 2rem; background-color: #fff !important; width: inherit;">
      <form class="validate-form">
        <img class="profile-img d-flex m-auto" src="{{ asset('images/profile.png') }}" alt="" srcset="">

        <div class="my-3 mx-auto">
          <h5 class="text-center">
            Ahmad Baihaqi
            (customer)
          </h5>
        </div>

        <div class="wrap-input100 validate-input">
          <input class="input100" type="text" name="username" placeholder="Nama lengkap">
        </div>
        <div class="wrap-input100 validate-input">
          <input class="input100" type="text" name="pass" placeholder="Alamat">
        </div>
        <div class="wrap-input100 validate-input">
          <input class="input100" type="text" name="pass" placeholder="Email">
        </div>
        <div class="wrap-input100 validate-input">
          <input class="input100" type="text" name="pass" placeholder="Nomor HP">
        </div>
        <div class="wrap-input100 validate-input">
          <input class="input100" type="date" name="pass" placeholder="Tanggal lahir">
        </div>
        <div class="wrap-input100 validate-input">
          <input class="input100" type="password" name="pass" placeholder="Password">
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Simpan
          </button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection


