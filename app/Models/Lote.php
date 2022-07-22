<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    use HasFactory;
    protected $table = 'lotes';
    protected $fillable = [
      'client_id','pesoBruto','sacos','tara','pesoHumedo'
    ];
}
