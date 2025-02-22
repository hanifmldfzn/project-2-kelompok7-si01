<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_awal', 
        'tgl_akhir', 
        'jumlah', 
        'ket', 
        'status', 
        'pegawai_id'];
}
