<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalangDana;

class GalangDanaController extends Controller
{
    public function create()
    {
        return view('buatdonasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validasi gambar
            'nama_galang_dana' => 'required',
            'nama_organisasi' => 'required',
            'kategori_donasi' => 'required',
            'target_donasi' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        // Proses unggah gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time().'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images', $namaFile);
        } else {
            $namaFile = null;
        }

        GalangDana::create([
            'gambar' => $namaFile, // simpan nama file gambar
            'nama_galang_dana' => $request->nama_galang_dana,
            'nama_organisasi' => $request->nama_organisasi,
            'kategori_donasi' => $request->kategori_donasi,
            'target_donasi' => $request->target_donasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('buat.form')->with('success', 'Data galang dana berhasil disimpan.');
    }

    public function index()
    {
        $galangDanaList = GalangDana::all();
        // dd($galangDanaList);
        return view('verifikasi', compact('galangDanaList'));
    }

    public function home()
    {
        $galangDanaList = GalangDana::all();
        return view('home', compact('galangDanaList'));
    }

    public function campaign()
    {
        $galangDanaList = GalangDana::all();
        return view('campaign', compact('galangDanaList'));
    }    

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = GalangDana::where('nama_galang_dana', 'LIKE', "%{$query}%")
            ->orWhere('nama_organisasi', 'LIKE', "%{$query}%")
            ->orWhere('kategori_donasi', 'LIKE', "%{$query}%")
            ->orWhere('deskripsi', 'LIKE', "%{$query}%")
            ->get();

        return response()->json(['results' => $results]);
    }


    public function edit($id)
    {
        $galangDana = GalangDana::findOrFail($id);
        return view('editgalangdana', compact('galangDana'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_galang_dana' => 'required',
            'nama_organisasi' => 'required',
            'kategori_donasi' => 'required',
            'target_donasi' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $galangDana = GalangDana::findOrFail($id);
        $galangDana->update($request->all());

        return redirect()->route('galang_dana.index')->with('success', 'Data galang dana berhasil diupdate.');
    }

    public function destroy($id)
    {
        $galangDana = GalangDana::findOrFail($id);
        $galangDana->delete();

        return redirect()->route('galang_dana.index')->with('success', 'Data galang dana berhasil dihapus.');
    }
}
