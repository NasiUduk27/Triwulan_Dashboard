<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator_kegiatan extends Model
{
    use HasFactory;

    protected $table = 'indikator_kegiatan';

    protected $fillable = [
        'nomor_rekening',
        'kegiatan',
        'indikator',
        'target',
        'satuan',
        'pagu'
    ];
}
