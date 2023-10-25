@extends('layout')

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Nilai</th>
                        <th scope="col">Author</th>
                        <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilai as $n)
                        <tr>
                            <td>{{ $n->nilai }}</td>
                            <td>{{ $n->author }}</td>
                            <td>{{ $n->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="input mb-3">
                <label class="input-text" id="basic-addon1">Total</label>
                <input type="text" class="form-control" value="{{ $total }}" aria-label="Total"
                    aria-describedby="basic-addon1" disabled>
            </div>
            <a href="/peserta_diklat">Kembali</a>
        </div>
    </div>

    <!-- Memuat jQuery terlebih dahulu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Kemudian baru memuat script DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
