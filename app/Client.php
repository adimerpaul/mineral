<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $coop_id
 * @property $nombreClie
 * @property $paternoClie
 * @property $maternoClie
 * @property $ci
 * @property $telefono
 * @property $cel
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cooperative $cooperative
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    
    static $rules = [
		'coop_id' => 'required',
		'nombreClie' => 'required',
		'paternoClie' => 'required',
		'maternoClie' => 'required',
		'ci' => 'required',
		'telefono' => 'required',
		'cel' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['coop_id','nombreClie','paternoClie','maternoClie','ci','telefono','cel','activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cooperative()
    {
        return $this->hasOne('App\Cooperative', 'id', 'coop_id');
    }
    

}
