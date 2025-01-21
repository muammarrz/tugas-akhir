<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    use HasFactory;

    protected $table = 'responden';
    protected $fillable = [
        'institution', 'address', 'phone', 'email', 'evaluator', 'position', 'date', 'scope',
    ];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class);
    }
}

