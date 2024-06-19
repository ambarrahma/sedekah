<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index()
    {
        $donasis = Donasi::all();
        dd($donasis);
        return view('home', compact('donasis'));
    }
}

class DonasiController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nama'=>'required|string',
            'email'=>'required|email',
            'nominal_donasi'=>'required|integer',
            'metode_pembayaran'=>'required|string',
            'pesan'=>'nullable|string',
        ]);

        $donasi = new Donasi([
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'nominal_donasi' => $request->get('nominal_donasi'),
            'metode_pembayaran' => $request->get('metode_pembayaran'),
            'pesan' => ('pesan'),
        ]);
        
       Donasi::create($request->all());

       return redirect()->route('donasi');
    }

    public function show() {
        $donasis = Donasi::all();
        // dd($donasis);
        return view('home', compact('donasis'));
    }
}