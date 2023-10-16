@extends('layout')

@section('content')
<div class="card" >
    <div class="card-body">
      <h5 class="card-title">Tambah Peserta</h5>

      <div class="input mb-3">
        <label class="input-text" id="basic-addon1">Nama Peserta</label>
        <input type="text" class="form-control" placeholder="Nama Peserta" aria-label="Nama Peserta" aria-describedby="basic-addon1">
      </div>

      <div class="input mb-3">
        <label class="input-text" id="basic-addon1">Asal Kolat</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Kolat</option>
            <option value="1">Belanegara</option>
            <option value="2">Universitas Brawijaya</option>
            <option value="3">Universitas Negeri Malang</option>
            <option value="3">SMK Negeri 8</option>
            <option value="3">SMP Negeri 2 Wagir</option>
            <option value="3">SMP Negeri 15</option>
          </select>
      </div>

      <a href="#" class="btn btn-primary">Input Data</a>
      <a href="/diklat" class="btn btn-primary">Kembali</a>
    </div>
  </div>
@endsection