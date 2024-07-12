<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JatahCuti extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahun',
        'jumlah',
        'pegawai_id'];
}
