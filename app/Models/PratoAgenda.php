<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PratoAgenda extends Model
{
    use HasFactory;

    protected $fillable = [
		'agenda_id',
		'prato_id'
    ];


    public function pratos(){
        return $this->belongsTo(Prato::class);
    }
    public function agendas(){
        return $this->belongsTo(Agenda::class);
    }
}
