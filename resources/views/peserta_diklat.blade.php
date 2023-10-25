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
                        <th>{{ $p->id }}</th>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->kolat }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Penilaian Peserta
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="/nilai/{{ $p->id }}">Nilai</a></li>
                                    <li><a class="dropdown-item" href="/tambah_nilai/{{ $p->id }}">Penilaian</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- end tabel --}}
    </div>
@endsection
