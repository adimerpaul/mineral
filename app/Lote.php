<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lote
 *
 * @property $id
 * @property $clie_id
 * @property $pesoBruto
 * @property $sacos
 * @property $tara
 * @property $pesoHumedo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lote extends Model
{
    
    static $rules = [
		'client_id' => 'required',
		'pesoBruto' => 'required',
		'sacos' => 'required',
		
		'pesoHumedo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['client_id','pesoBruto','sacos','tara','pesoHumedo'];
    
    public function client()
    {
        return $this->hasOne('App\Client', 'id', 'client_id');
            
    }
    

}
