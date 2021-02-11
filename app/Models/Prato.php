<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'descricao',
		'categoria',
		'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function pratosagendas(){
        return $this->hasMany(PratoAgenda::class);
    }
}
