<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    public function indikator()
    {
        return $this->belongsTo(Indikator::class, 'indikator_id');
    }
}
