@extends('layout')

@section('content')

{{-- notification --}}
<div class="my-4">
  @if (session('success'))
      <div class="alert alert-info">
          {{ session('success') }}
      </div>
  @endif

  @if (session('edit'))
      <div class="alert alert-info">
          {{ session('edit') }}
      </div>
  @endif

  @if (session('delete'))
      <div class="alert alert-danger">
          {{ session('delete') }}
      </div>
  @endif
</div>

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
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($peserta as $p)
      <tr>
        <th>{{$p->id}}</th>
        <td>{{$p->nama}}</td>
        <td>{{$p->kolat}}</td>
        <td><a href="/tambah_nilai/{{$p->id}}">nilai</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{-- end tabel --}}
</div>

@endsection