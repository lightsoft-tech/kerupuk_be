@extends('layouts.profile_dashboard')

@section('content')

<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="table-responsive mt-4">
    <table class="table">
      <thead>
        <tr class="bg-secondary">
          <th class="txt1" scope="col">No</th>
          <th class="txt1" scope="col">Nama Lengkap</th>
          <th class="txt1" scope="col">Email</th>
          <th class="txt1" scope="col">Alamat</th>
          <th class="txt1" scope="col">Nomor Telepon</th>
          <th class="txt1" scope="col">Tanggal Lahir</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
            @if (!$user->hasRole('admin'))
                <tr class="table-light">
                    <td class="txt1">{{ $loop->iteration }}</td>
                    <td class="txt1">{{ $user->name }}</td>
                    <td class="txt1">{{ $user->email }}</td>
                    <td class="txt1">{{ $user->address }}</td>
                    <td class="txt1">{{ $user->phone_number }}</td>
                    <td class="txt1">{{ $user->birthday }}</td>
                </tr>
            @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
