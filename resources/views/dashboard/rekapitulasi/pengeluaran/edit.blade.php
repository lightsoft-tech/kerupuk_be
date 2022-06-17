@extends('layouts.main_dashboard')

@section('content')

<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="mt-2">
    <h2 class="color-theme-primary">FORM PENGELUARAN</h2>

    <div class="row">
      <div class="col-md-12">
        <div class="card-body">
          <form method="POST" action="/admin/expenditures-update/{{ $expenditure->id }}}">
            @method('put')
            @csrf

            <div class="wrap-input100 validate-input mt-3">
              <label for="tanggal">
                <h5 class="color-theme-primary">
                  Tanggal
                </h5>
              </label>
              <input class="input100" type="date" name="date" value="{{ $expenditure->date }}" id="tanggal">
            </div>

            <div class="wrap-input100 validate-input">
              <label for="keterangan">
                <h5 class="color-theme-primary">
                  Keterangan
                </h5>
              </label>
              <input class="input100" type="text" name="description" value="{{ $expenditure->description }}" placeholder="Keterangan" id="keterangan">
            </div>

            <div class="wrap-input100 validate-input mt-3">
              <label for="biaya">
                <h5 class="color-theme-primary">
                  Biaya
                </h5>
              </label>
              <input class="input100" type="number" name="cost" value="{{ $expenditure->cost }}"  placeholder="Biaya" id="biaya">
            </div>
            {{-- button triger --}}
            <button type="button" class="btn-product mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Submit
            </button>
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
                                <button type="submit" class="btn-modal2 fw-bold container-fluid">Simpan</button>
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


  </div>
</div>
@endsection
