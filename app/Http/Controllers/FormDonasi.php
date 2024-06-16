<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class SedekahController extends Controller
{
    public function index()
    {
        return view('sedekah');
    }

    public function store(Request $request)
    {
        $donation = new Donation();
        $donation->user_id = auth()->user()->id;
        $donation->nama = $request->input('nama');
        $donation->email = $request->input('email');
        $donation->nominal_donasi = $request->input('nominal_donasi');
        $donation->metode_pembayaran = $request->input('metode_pembayaran');
        $donation->pesan = $request->input('pesan');
        $donation->save();

        return redirect()->back()->with('success', 'Donasi berhasil dikirim!');
    }
}