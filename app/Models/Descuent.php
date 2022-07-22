<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuent extends Model
{
    use HasFactory;
    protected $table = 'descuents';
    protected $fillable = [
        'coop_id',
        'nombreDesc',
        'porcentajeDesc',
        'activo',
        
        
    ];

    public function cooperativs()
    {
        //return $this->belongsToMany(Cooperativ::class, 'cooperativ_descuent')->withTimestamps();
    }

  
}
