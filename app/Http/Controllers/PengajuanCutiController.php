<?php

namespace App\Http\Controllers;

use App\Models\PengajuanCuti;
use Illuminate\Http\Request;

class PengajuanCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pengajuancuti = PengajuanCuti::all();
        return view('pengajuancuti.pengajuancuti', compact('list_pengajuancuti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengajuancuti.form_pengajuancuti');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'tgl_awal' => 'required | date',
            'tgl_akhir' => 'required | date',
            'jumlah' => 'required | integer',
            'ket' => 'required | string',
            'status' => 'required | string',
            'pegawai_id' => 'required | integer',
        ]);
        PengajuanCuti::create($validated);
        return redirect('admin/pengajuancuti')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengajuancuti = PengajuanCuti::find($id);
        return view('pengajuancuti.detail_pengajuancuti', compact('pengajuancuti'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengajuancuti = PengajuanCuti::find($id);
        return view('pengajuancuti.edit', compact('pengajuancuti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tgl_awal' => 'required | date',
            'tgl_akhir' => 'required | date',
            'jumlah' => 'required | integer',
            'ket' => 'required | string',
            'status' => 'required | string',
            'pegawai_id' => 'required | integer',
        ]);

        $pengajuancuti = PengajuanCuti::find($id);
        $pengajuancuti->update($validated);
        return redirect('admin/pengajuancuti')->with('pesan', 'Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengajuancuti = PengajuanCuti::find($id);
        $pengajuancuti->delete();
        return redirect('admin/pengajuancuti')->with('pesan', 'Data Berhasil di Hapus');
    }
}
