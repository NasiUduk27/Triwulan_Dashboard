<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_program extends Model
{
    use HasFactory;

    protected $table = 'master_program';

    protected $fillable = [
        'nomor_rekening',
        'nama_program',
    ];
}