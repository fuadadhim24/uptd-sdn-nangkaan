<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::orderBy('created_at', 'asc')->get();
        return view('admin.ekstrakulikuler.index', compact('extracurriculars'));
    }

    public function create()
    {
        return view('extracurriculars.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'pertemuan' => 'nullable|integer',
            'manfaat' => 'nullable|array',
            'nomor_handphone' => 'nullable|string|max:20',
        ]);

        // Simpan data
        $extracurricular = new Extracurricular();
        $extracurricular->name = $request->input('name');
        $extracurricular->pertemuan = $request->input('pertemuan');
        $extracurricular->manfaat = json_encode($request->input('manfaat'));
        $extracurricular->nomor_handphone = $request->input('nomor_handphone');
        $extracurricular->save();

        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('admin.ekstrakulikuler')->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function show(Extracurricular $extracurricular)
    {
        return view('extracurriculars.show', compact('extracurricular'));
    }

    public function edit(Extracurricular $extracurricular)
    {
        return view('admin.ekstrakulikuler.index', compact('extracurricular'));
    }

    // Menyimpan perubahan yang telah diupdate
    public function update(Request $request, Extracurricular $extracurricular)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'pertemuan' => 'nullable|integer',
            'manfaat' => 'nullable|array',
            'manfaat.*' => 'nullable|string|max:255',
            'nomor_handphone' => 'nullable|string|max:20',
        ]);

        $extracurricular->update([
            'name' => $validatedData['name'],
            'pertemuan' => $validatedData['pertemuan'],
            'manfaat' => json_encode($validatedData['manfaat']),
            'nomor_handphone' => $validatedData['nomor_handphone'],
        ]);

        return redirect()->route('admin.ekstrakulikuler')->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    // Menghapus data
    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();
        return redirect()->route('admin.ekstrakulikuler')->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}
