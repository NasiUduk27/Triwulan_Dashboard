<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenda extends Model
{
    use HasFactory;

    protected $table = 'tenda';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'merk_tenda',
        'kapasitas',
        'sewaperhari',
        'stok'
    ];
}
