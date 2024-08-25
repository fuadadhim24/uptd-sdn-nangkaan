<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    public function index()
    {
        $data = DataSekolah::all();
        // dd($data);
        return view('admin.data-sekolah.index', compact('data'));
    }
    public function update(Request $request, DataSekolah $dataSekolah)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'status_sekolah' => 'required|string|max:255',
            'nss' => 'required|string|max:255',
            'npsn' => 'required|string|max:255',
            'alamat_sekolah' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'tanggal_sk_pendirian' => 'required|date',
            'sk_ijin_operasional' => 'required|string|max:255',
            'tanggal_sk_ijin_operasional' => 'required|date',
        ]);

        $dataSekolah->update([
            'nama_sekolah' => $request->input('nama_sekolah'),
            'status_sekolah' => $request->input('status_sekolah'),
            'nss' => $request->input('nss'),
            'npsn' => $request->input('npsn'),
            'alamat_sekolah' => $request->input('alamat_sekolah'),
            'desa_kelurahan' => $request->input('desa_kelurahan'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten_kota' => $request->input('kabupaten_kota'),
            'provinsi' => $request->input('provinsi'),
            'kode_pos' => $request->input('kode_pos'),
            'tanggal_sk_pendirian' => $request->input('tanggal_sk_pendirian'),
            'sk_ijin_operasional' => $request->input('sk_ijin_operasional'),
            'tanggal_sk_ijin_operasional' => $request->input('tanggal_sk_ijin_operasional'),
        ]);

        return redirect()->route('admin.data_sekolah')->with('success', 'Data sekolah berhasil diperbarui.');
    }
}
