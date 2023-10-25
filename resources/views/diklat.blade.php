@extends('index');

@section('content')
    <div class="px-4 py-5 my-5 text-center">
        {{-- <img class="d-block mx-auto mb-4 " src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
        <h1 class="display-5 fw-bold text-body-emphasis">Diklat Anggota</h1>
        <div class="col-lg-6 mx-auto">
            {{-- <p class="lead mb-4">"Kita telah tiba pada momen istimewa! Ayo bergabung dalam acara Diklat, di mana kami akan mengajakmu untuk menjelajahi lebih dalam Merpati Putih Kota Malang, berkenalan dengan rekan-rekan latihan dari berbagai Kolat yang ada di cabang kota Malang, dan bersama-sama merajut visi dan misi yang kuat. 
        Melalui acara ini, kita akan memperkuat ikatan antar anggota, membangun hubungan yang lebih erat. 
        Jangan lewatkan peluang ini untuk meraih pengetahuan, pengalaman, dan pertemanan yang tak terlupakan. 
        Daftar sekarang, dan mari kita jelajahi dunia dengan semangat yang menyatukan kita!"</p> --}}
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSd7mbhV9891WGhlYtflthSOptLGMqLAYIePlMIqL_0_24gUpw/viewform"
                    target="_blank" class="btn btn-primary btn-lg px-4 gap-3">Daftar Sekarang</a>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Panitia
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/peserta_diklat">Data Peserta</a></li>
                        <li><a class="dropdown-item" href="/penilaian">Penilaian</a></li>
                        {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
