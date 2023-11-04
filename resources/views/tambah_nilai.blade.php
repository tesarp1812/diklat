@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Nilai</h5>
            <form action="/tambah_nilai" method="POST">
                @csrf
                <input type="text" value="{{ $id }}" name="id_peserta">
                {{-- <div class="input mb-3">
                    <label class="input-text" id="basic-addon1">Nama Peserta</label>
                    <input type="text" name="nama" class="form-control"
                        placeholder="{{ $nilai->peserta->nama ?? '' }}" aria-label="Nama Peserta"
                        aria-describedby="basic-addon1" disabled>
                </div> --}}

                <div class="input mb-3">
                    <label class="input-text" id="basic-addon1">Nilai</label>
                    <input type="number" name="nilai" class="form-control" placeholder="Nilai" aria-label="Nilai"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input mb-3">
                    <label class="input-text" id="basic-addon1">Author</label>
                    <input type="text" name="author" class="form-control" placeholder="Author" aria-label="Author"
                        aria-describedby="basic-addon1">
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success">
                <a href="/peserta_diklat" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
