@extends('layout')

@section('content')
<div class="card" style="">

  {{-- button tambah --}}
  <div class="card-body">
    <a href="/tambah_peserta" class="btn btn-primary">Tambah Data Peserta</a>
  </div>

  {{-- tabel --}}
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Kolat</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>1</th>
        <td>Mark</td>
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
  {{-- end tabel --}}
</div>

@endsection