<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadeira extends Model
{
    use HasFactory;

    protected $table = "cadeiras";

    protected $fillable = "id_mesa";

    public function mesa(){
        return $this->belongsTo(Mesa::class, 'id_mesa');
    }

}
