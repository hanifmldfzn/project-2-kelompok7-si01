<?php

namespace App\Http\Controllers;

use App\Models\PengajuanCuti;
use Illuminate\Http\Request;

class FormController extends Controller
{
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index');
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
        return redirect('index')->with('pesan', 'Data Berhasil di Tambah');
    }
}
