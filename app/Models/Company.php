<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Company
 * @package App\Models
 * @version January 30, 2022, 8:17 am UTC
 *
 * @property string $name
 * @property string $domain
 * @property string $phone
 * @property number $lat
 * @property number $lng
 * @property number $radius
 */
class Company extends Model
{


    public $table = 'tb_company74';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'domain',
        'phone',
        'lat',
        'lng',
        'radius'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'domain' => 'string',
        'phone' => 'string',
        'lat' => 'float',
        'lng' => 'float',
        'radius' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:32',
        'domain' => 'required|string|max:64',
        'phone' => 'required|string|max:16',
        'lat' => 'required|numeric',
        'lng' => 'required|numeric',
        'radius' => 'nullable|numeric'
    ];

    
}
