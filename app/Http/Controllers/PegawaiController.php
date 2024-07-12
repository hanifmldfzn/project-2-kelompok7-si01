<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pegawai = Pegawai::all();
        return view('pegawai.pegawai', compact('list_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.form_pegawai');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'gender' => 'required | string',
            'tmp_lahir' => 'required | string',
            'tgl_lahir' => 'required | date',
            'telpon' => 'required | string',
            'alamat' => 'required | string',
            'divisi_id' => 'required | integer',
        ]);
        Pegawai::create($validated);
        return redirect('admin/pegawai')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.detail_pegawai', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'gender' => 'required | string',
            'tmp_lahir' => 'required | string',
            'tgl_lahir' => 'required | date',
            'telpon' => 'required | string',
            'alamat' => 'required | string',
            'divisi_id' => 'required | integer',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->update($validated);
        return redirect('admin/pegawai')->with('pesan', 'Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('admin/pegawai')->with('pesan', 'Data Berhasil di Hapus');
    }
}
