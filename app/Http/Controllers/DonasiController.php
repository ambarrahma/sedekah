<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller 
{
    public function index(){
        $donasis = Donasi::all();
        return view('home', compact('donasis'));
    }

    public function donasi(){
        return view('donasi');
    }

    public function store(Request $request){
        $request->validate([
            'nama'=>'required|string',
            'email'=>'required|email',
            'nominal_donasi'=>'required|integer',
            'metode_pembayaran'=>'required|string',
            'pesan'=>'nullable|string',
        ]);


        
       Donasi::create($request->all());

       return redirect()->route('donasi.form');
    }

    public function show() {
        $donasis = Donasi::all();
        // dd($donasis);
        return view('donasi-show', compact('donasis'));
    }


}
