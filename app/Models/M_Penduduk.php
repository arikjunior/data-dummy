<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Penduduk extends Model
{
    // use HasFactory;

    protected $table = 'penduduk';

    protected $fillable = [
        'ktp',
        'nama',
        'alamat',
        'tanggallahir',
        'tempatlahir',
        'agama',
        'status',
        'pekerjaan',
        'wargaNegara'
    ];

    protected $hidden;
}
