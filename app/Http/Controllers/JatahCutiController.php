<?php

namespace App\Http\Controllers;

use App\Models\JatahCuti;
use Illuminate\Http\Request;

class JatahCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_jatahcuti = JatahCuti::all();
        return view('jatahcuti.jatahcuti', compact('list_jatahcuti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jatahcuti.form_jatahcuti');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'tahun' => 'required | integer',
            'jumlah' => 'required | integer',
            'pegawai_id' => 'required | integer',
        ]);
        JatahCuti::create($validated);
        return redirect('admin/jatahcuti')->with('pesan', 'Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jatahcuti = JatahCuti::find($id);
        return view('jatahcuti.detail_jatahcuti', compact('jatahcuti'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jatahcuti = JatahCuti::find($id);
        return view('jatahcuti.edit', compact('jatahcuti'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tahun' => 'required | integer',
            'jumlah' => 'required | integer',
            'pegawai_id' => 'required | integer',
        ]);

        $jatahcuti = JatahCuti::find($id);
        $jatahcuti->update($validated);
        return redirect('admin/jatahcuti')->with('pesan', 'Data berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jatahcuti = JatahCuti::find($id);
        $jatahcuti->delete();
        return redirect('admin/jatahcuti')->with('pesan', 'Data Berhasil di Hapus');
    }
}
