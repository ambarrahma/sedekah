<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('home');
    }

    public function form(){
        return view('form');
    }

    public function store(Request $request){
       Register::create($request->all());

       return redirect()->route('akun');
    }

    // coba
}
