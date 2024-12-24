<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Testimoni;
use App\Models\Terverifikasi;


class TestimoniController extends Controller
{

    public function kirim(Request $request)
    {
        // Validasi formulir jika diperlukan
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'kritikdansaran' => 'required',
            'testimoni' => 'required',
        ]);

        // Simpan data ke database
        Testimoni::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'kritik_dan_saran' => $request->input('kritikdansaran'),
            'testimoni' => $request->input('testimoni'),
        ]);

        // Redirect atau memberikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Testimoni berhasil dikirim!');
    }

    public function index()
    {
        $testimonis = Testimoni::all();
        return view('dashboard', ['testimonis' => $testimonis]);
    }

    public function terima($nama)
    {
        // Cari testimonial yang sesuai berdasarkan nama
        $testimoni = Testimoni::where('nama', $nama)->first();

        // Pindahkan data ke tabel terverifikasis
        Terverifikasi::create([
            'nama' => $testimoni->nama,
            'email' => $testimoni->email,
            'kritik_dan_saran' => $testimoni->kritik_dan_saran,
            'testimoni' => $testimoni->testimoni,
        ]);

        // Hapus data dari tabel testimonis
        DB::table('testimoni')->where('nama', $nama)->delete();

        // Redirect kembali ke halaman dashboard dengan pesan sukses
        return redirect()->back()->with('success', 'Testimoni diterima dan dipindahkan ke terverifikasi.');
    }
}