<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visiMisis = VisiMisi::all();
        // dd($visiMisis);
        return view('admin.visi-misi.index', compact('visiMisis'));
    }   

    public function create()
    {
        return view('visi_misi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'type' => 'required|in:0,1',
        ]);

        VisiMisi::create([
            'description' => $request->description,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.visi_misi')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(VisiMisi $visiMisi)
    {
        return view('visi_misi.show', compact('visiMisi'));
    }

    public function edit(VisiMisi $visiMisi)
    {
        return view('visi_misi.edit', compact('visiMisi'));
    }

    public function update(Request $request, VisiMisi $visiMisi)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'type' => 'required|in:0,1',
        ]);
        // dd($visiMisi);

        $visiMisi->update([
            'description' => $request->description,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.visi_misi')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(VisiMisi $visiMisi)
    {
        $visiMisi->delete();
        return redirect()->route('admin.visi_misi')->with('success', 'Data berhasil dihapus.');
    }
    public function lPIndex(){
        $visiMisis = VisiMisi::all();

        $visi = $visiMisis->where('type', 'Visi')->first();
        $misi = $visiMisis->where('type', 'Misi');

        return view('visi-misi', compact('visi', 'misi'));
    }
}
