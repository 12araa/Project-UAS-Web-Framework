<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_penduduk',
        'jumlah_kk',
        'laki_laki',
        'perempuan',
        'kepadatan'
    ];
}
