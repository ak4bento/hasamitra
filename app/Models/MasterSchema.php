<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class MasterSchema
 * @package App\Models
 * @version January 30, 2022, 8:28 am UTC
 *
 * @property integer $id_department
 * @property string $initial_schema
 */
class MasterSchema extends Model
{


    public $table = 'master_schema';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_department',
        'initial_schema'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_department' => 'integer',
        'initial_schema' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_department' => 'required|integer',
        'initial_schema' => 'required|string|max:3'
    ];

    
}
