<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Diaria
 *
 * @property $id
 * @property $cotDiaAg
 * @property $cotDiaPb
 * @property $cotDiaZn
 * @property $cotDiaSn
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Diaria extends Model
{
    
    static $rules = [
      'cotDiaAg' => 'required',
      'cotDiaPb' => 'required',
      'cotDiaZn' => 'required',
      'cotDiaSn' => 'required',
		  'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cotDiaAg','cotDiaPb','cotDiaZn','cotDiaSn','fecha'];



}
