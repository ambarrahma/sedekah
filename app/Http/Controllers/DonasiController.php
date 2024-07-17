<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\GalangDana;
use App\Models\Donasi;

class DonasiController extends Controller
{
    public function create()
    {
        return view('donasi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nominal_donasi' => 'required|integer|min:1',
            'metode_pembayaran' => 'required|string',
            'pesan' => 'nullable|string',
        ]);

        Donasi::create($validatedData);

        return redirect()->back()->with('success', 'Donasi berhasil dikirim!');
    }

    public function home()
    {
        $donasis = Donasi::all();
        $galangDanaList = GalangDana::all();

        return view('home', compact('donasis', 'galangDanaList'));
    }

    public function verifikasi()
    {
        $donasis = Donasi::all();
        return view('verifikasi', ['donasis' => $donasis]);
    }

    public function campaign()
    {
        $donasis = Donasi::all();
        $galangDanaList = GalangDana::all();

        return view('campaign', compact('donasis', 'galangDanaList'));
    }

    public function getDonationsData() {
        $donations = Donasi::select(
                            DB::raw('SUM(nominal_donasi) as total'), 
                            DB::raw('MONTH(created_at) as month')
                        )
                        ->groupBy('month')
                        ->get();
    
        return response()->json($donations);
    }

    public function getDonationsList() {
        $donasis = Donasi::all();
        return view('donations_chart', compact('donasis'));
    }

    // public function showDonationsChart() {
    //     $donasis = Donasi::all();
    //      // dd($galangDanaList);
    //     return view('donations_chart', compact('donasis'));
    // }
    
    
    
}
