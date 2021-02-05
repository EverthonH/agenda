<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PratoAgenda extends Model
{
    use HasFactory;

    public function pratos(){
        return $this->belongsTo(Prato::class);
    }
    public function agendas(){
        return $this->belongsTo(Agenda::class);
    }
}
