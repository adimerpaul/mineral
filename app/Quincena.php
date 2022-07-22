<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quincena
 *
 * @property $id
 * @property $cotAg
 * @property $cotPb
 * @property $cotZn
 * @property $cotSn
 * @property $alicAg
 * @property $alicPb
 * @property $alicZn
 * @property $alicSn
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Quincena extends Model
{
    
    static $rules = [
      'cotAg' => 'required',
      'cotPb' => 'required',
      'cotZn' => 'required',
      'cotSn' => 'required',
      'alicAg' => 'required',
      'alicPb' => 'required',
      'alicZn' => 'required',
      'alicSn' => 'required',
      'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cotAg','cotPb','cotZn','cotSn','alicAg','alicPb','alicZn','alicSn','fecha'];



}
