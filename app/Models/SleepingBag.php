<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SleepingBag extends Model
{
    use HasFactory;

    protected $table = 'sleeping_bag';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'merk_sb',
        'warna',
        'sewaperhari'
    ];
}
