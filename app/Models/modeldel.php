<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeldel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'bupatiwalkot',
        'luas',
        'penduduk',
        'kepadatan',
        'kecamatan',
        'kelurahan',
        'desa',
        'lambang',
        'petalokasi',
    ];
}
