<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
