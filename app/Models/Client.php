<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = [
        'coop_id', 
		'nombreClie',
		'paternoClie',
		'maternoClie' ,
		'ci',
		'telefono',
		'cel' ,
		'activo'
    ];

}
