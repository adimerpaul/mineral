<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Descuent
 *
 * @property $id
 * @property $coop_id
 * @property $nombreDesc
 * @property $porcentajeDesc
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cooperative $cooperative
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Descuent extends Model
{
    
    static $rules = [
		'coop_id' => 'required',
		'nombreDesc' => 'required',
		'porcentajeDesc' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['coop_id','nombreDesc','porcentajeDesc','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cooperative()
    {
        return $this->hasone('App\Cooperative', 'id', 'coop_id');
    }
    

}
