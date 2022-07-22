<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cooperative
 *
 * @property $id
 * @property $nombreCoop
 * @property $dirCoop
 * @property $representanteCoop
 * @property $NIMCoop
 * @property $NITCoop
 * @property $celCoop
 * @property $created_at
 * @property $updated_at
 *
 * @property Descuent[] $descuents
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cooperative extends Model
{
    
    static $rules = [
		'nombreCoop' => 'required',
		'dirCoop' => 'required',
		'representanteCoop' => 'required',
		'NIMCoop' => 'required',
		'NITCoop' => 'required',
		'celCoop' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCoop','dirCoop','representanteCoop','NIMCoop','NITCoop','celCoop'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function descuents()
    {
        return $this->hasMany('App\Descuent', 'coop_id', 'id');
    }
    

}
