<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;

    protected $table = 'sepatus';
    protected $fillable = [
        'merk', 
        'ukuran', 
        'warna', 
        'harga_sewa'
    ];
}
