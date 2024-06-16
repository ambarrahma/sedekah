<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('home');
    }

    public function donasi(){
        return view('donasi');
    }

    public function form(){
        return view('form');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required | string',
            'kata_sandi' => 'required|string',
        ]);
       Register::create($request->all());

       return redirect()->route('akun');
    }

}
