<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaki extends Model
{
    use HasFactory;

    protected $table = 'pendaki';

    protected $fillable = [
        'NIK',
        'nama',
        'alamat',
        'no_hp',
    ];
}
