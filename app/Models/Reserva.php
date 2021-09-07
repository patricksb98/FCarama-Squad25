<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_consultor',
        'id_cadeira',
        'local',
        'dia',
    ];

    public function consultor(){
        return $this->belongsTo(Consultor::class, 'id_consultor');
    }

    public function cadeira(){
        return $this->belongsTo(Cadeira::class, 'id_cadeira');
    }
}
