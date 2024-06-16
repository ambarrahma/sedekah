<?php

namespace App\Http\Controllers;

use App\Models\Fundraiser;
use Illuminate\Http\Request;

class FundraiserController extends Controller
{
    public function index()
    {
        $fundraisers = Fundraiser::all();
        return view('fundraisers.index', compact('fundraisers'));
    }

    public function create()
    {
        return view('fundraisers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'donor_name' => 'required|string|max:255',
            'organizer_name' => 'required|string|max:255',
            'category' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        Fundraiser::create($request->all());

        return redirect()->route('fundraisers.index')
                        ->with('success', 'Galang dana berhasil dibuat.');
    }

    public function show(Fundraiser $fundraiser)
    {
        return view('fundraisers.show', compact('fundraiser'));
    }

    public function edit(Fundraiser $fundraiser)
    {
        return view('fundraisers.edit', compact('fundraiser'));
    }

    public function update(Request $request, Fundraiser $fundraiser)
    {
        $request->validate([
            'donor_name' => 'required|string|max:255',
            'organizer_name' => 'required|string|max:255',
            'category' => 'required|string',
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string',
        ]);

        $fundraiser->update($request->all());

        return redirect()->route('fundraisers.index')
                        ->with('success', 'Galang dana berhasil diupdate.');
    }

    public function destroy(Fundraiser $fundraiser)
    {
        $fundraiser->delete();

        return redirect()->route('fundraisers.index')
                        ->with('success', 'Galang dana berhasil dihapus.');
    }
}
