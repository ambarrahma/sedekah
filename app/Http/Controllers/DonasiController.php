<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index(){
        return view('home');
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

       return redirect()->route('donasi');
    }

}
