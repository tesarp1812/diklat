<?php

namespace App\Http\Controllers;

// import model
use App\Models\peserta;



use Illuminate\Http\Request;

class DiklatController extends Controller
{
    public function index()
    {
        $peserta = Peserta::all();
        //dd($peserta);
        return view('/peserta_diklat', compact('peserta'));
    }

    public function create()
    {
        return view('/tambah_peserta');
    }

    public function store(Request $request)
    {

        //dd($request->all());

        //tambah data
        peserta::create([
            'nama'     => $request->nama,
            'kolat'   => $request->kolat
        ]);

        return redirect('/peserta_diklat')->with(['success' => 'data berhasil di masukkan']);
    }

    public function nilai(Request $request)
    {
        return view ('/tambah_nilai');
    }
}
