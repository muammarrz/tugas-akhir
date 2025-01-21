<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';
    protected $fillable = [
        'responden_id', 'kategori', 'jawaban',
    ];

    protected $casts = [
        'jawaban' => 'array', // Otomatis mengonversi JSON ke array PHP
    ];

    public function responden()
    {
        return $this->belongsTo(Responden::class);
    }
}


