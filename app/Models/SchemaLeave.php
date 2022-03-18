<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SchemaLeave
 * @package App\Models
 * @version January 30, 2022, 9:22 am UTC
 *
 * @property integer $id_master_schema
 * @property string $gender
 * @property string $info
 * @property string $quantify_saldo
 * @property integer $saldo
 */
class SchemaLeave extends Model
{
    use SoftDeletes;


    public $table = 'tb_schema_rehat';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_master_schema',
        'gender',
        'info',
        'quantify_saldo',
        'saldo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_master_schema' => 'integer',
        'gender' => 'string',
        'info' => 'string',
        'quantify_saldo' => 'string',
        'saldo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_master_schema' => 'required|integer',
        'gender' => 'required|string',
        'info' => 'required|string|max:64',
        'quantify_saldo' => 'required|string',
        'saldo' => 'required|integer'
    ];

    
}
