<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaket extends Model
{
    use HasFactory;

    protected $table = 'jakets';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'merk_jaket',
        'warna',
        'sewaperhari'
    ];
}
