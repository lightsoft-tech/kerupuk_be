@extends('layouts.profile_dashboard')

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
      <form class="validate-form" action="/profile-update/{{ $user->id }}" method="POST">
        @method('put')
        @csrf
        <img class="profile-img d-flex m-auto" src="{{ asset('images/profile.png') }}" alt="" srcset="">

        <div class="my-3 mx-auto">
          <h5 class="text-center">
            Ahmad Baihaqi
            (customer)
          </h5>
        </div>

        <div class="wrap-input100 validate-input">
            <input class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ $user->name }}" placeholder="Nama lengkap">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="wrap-input100 validate-input">
            <input class="input100 @error('address') is-invalid @enderror" type="text" name="address" value="{{ $user->address }}" placeholder="Alamat">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="wrap-input100 validate-input">
            <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ $user->email }}" placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="wrap-input100 validate-input">
            <input class="input100 @error('phone_number') is-invalid @enderror" type="number" name="phone_number" value="{{ $user->phone_number }}" placeholder="Nomor HP">
            @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="wrap-input100 validate-input">
            <input class="input100 @error('birthday') is-invalid @enderror" type="date" name="birthday" value="{{ $user->birthday }}" placeholder="Tanggal lahir">
            @error('birthday')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="wrap-input100 validate-input">
          <input class="input100" type="password" name="password" placeholder="Password">
        </div>
        <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password_confirmation" placeholder="Password_confirmation">
          </div>

        <div class="container-login100-form-btn">
          <button type="button" class="login100-form-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Simpan
          </button>
        </div>
        {{-- <button type="button" class="btn-product mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Submit
        </button> --}}
        {{-- modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="d-flex justify-content-center my-4">
                        <h5>Ubah Data ?</h5>
                    </div>
                    <div class="row mx-0">
                        <div class="col container-fluid d-flex justify-content-center px-0">
                            <button type="button" class="btn-modal1 fw-bold container-fluid" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col container-fluid d-flex justify-content-center px-0">
                            <button type="submit" class="btn-modal2 fw-bold container-fluid">Submit</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


