<?php

namespace App\Http\Controllers;

// import model
use App\Models\peserta;
use App\Models\nilai;



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
        $nilai = Nilai::with('peserta')->where('id_peserta', $request->id)->get();
        $total = Nilai::sum('nilai');
        //dd($total);
        return view('/nilai', ['nilai' => $nilai, 'total' => $total, 'id_peserta' => $request->id]);
    }

    public function nilaiTambah(Request $request)
    {
        //dd($request->all());
        nilai::create([
            'id_peserta' => $request->id_peserta,
            'nilai' => $request->nilai,
            'author' => $request->author
        ]);
        return redirect('/peserta_diklat')->with(['success' => 'data berhasil di masukkan']);
    }

    public function tambahNilai(Request $request)
    { {
            $nilai = Nilai::with('peserta')->where('id_peserta', $request->id)->first();
            //dd($nilai);
            return view('/tambah_nilai', ['nilai' => $nilai, 'id_peserta' => $request->id]);
        }
    }
}
