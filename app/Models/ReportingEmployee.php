<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ReportingEmployee
 * @package App\Models
 * @version June 28, 2022, 12:32 pm UTC
 *
 * @property integer $id_employee
 * @property string $information
 * @property string $imei
 * @property string $jenis
 */
class ReportingEmployee extends Model
{


    public $table = 'tb_activity_employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_employee',
        'information',
        'imei',
        'jenis'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_employee' => 'integer',
        'information' => 'string',
        'imei' => 'string',
        'jenis' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_employee' => 'required|integer',
        'information' => 'required|string|max:60000',
        'imei' => 'required|string|max:32',
        'jenis' => 'nullable|string|max:16'
    ];

    
}
