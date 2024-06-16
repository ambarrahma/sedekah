<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Donasi;
=======
>>>>>>> aa620a060fb3187b95b6c85d08563dce2748cbe6
use Illuminate\Http\Request;

class DonasiController extends Controller
{
<<<<<<< HEAD
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

=======
    // ... metode controller Anda
>>>>>>> aa620a060fb3187b95b6c85d08563dce2748cbe6
}
