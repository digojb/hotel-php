<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['quarto_id', 'data_reserva'];

    public function quarto()
    {
        return $this->belongsTo(Quarto::class);
    }
}
