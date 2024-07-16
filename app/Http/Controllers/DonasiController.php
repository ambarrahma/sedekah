<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalangDana;
use App\Models\Donasi;

class DonasiController extends Controller
{
    /**
     * Menampilkan form donasi.
     */
    public function create()
    {
        return view('donasi.create');
    }

    /**
     * Menyimpan data donasi ke dalam database.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nominal_donasi' => 'required|integer|min:1',
            'metode_pembayaran' => 'required|string',
            'pesan' => 'nullable|string',
        ]);

        // Simpan data ke database
        Donasi::create($validatedData);

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->back()->with('success', 'Donasi berhasil dikirim!');
    }

    public function home()
    {
        // Ambil data donasi dari database
        $donasis = Donasi::all();
        $galangDanaList = GalangDana::all();

        // Kirim data ke view home
        return view('home', compact('donasis', 'galangDanaList'));
    }

    public function verifikasi()
    {
        $donasis = Donasi::all();
        return view('verifikasi', ['donasis' => $donasis]);
    }

    public function campaign()
    {
        // Ambil data donasi dari database
        $donasis = Donasi::all();
        $galangDanaList = GalangDana::all();

        // Kirim data ke view campaign
        return view('campaign', compact('donasis', 'galangDanaList'));
    } 
    
}
