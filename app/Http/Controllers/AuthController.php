<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {   
        $credentials = $request->only('nama', 'password');

        $request->validate([
            'nama' => 'required|string',
            'password' => 'required|min:6',
        ]);

        // Attempt to authenticate the user based on the provided 'nama' and 'password'
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('verifikasi');
        }

        return back()->withErrors([
            'nama' => 'The provided credentials do not match our records.',
        ])->onlyInput('nama');
    }

    public function showRegisterForm()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'telepon' => 'nullable|string',
            'alamat' => 'required|string',
        ]);
    
        // Ganti 'kata_sandi' menjadi 'password' sesuai dengan field yang didefinisikan pada model Users
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Sesuaikan dengan field 'password'
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        $user->save();
    
        // Setelah registrasi, otomatis lakukan login
        Auth::login($user);
    
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); // Redirect pengguna ke halaman utama setelah logout
    }    
   
}
