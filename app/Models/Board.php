<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $table = 'board';

    protected $fillable = [
        'nombre', 'nivel_id'
    ];

    public function cotizaciones()
    {
        return $this->hasMany(Cotizacion::class);
    }
}
