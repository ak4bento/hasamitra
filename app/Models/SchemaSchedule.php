<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SchemaSchedule
 * @package App\Models
 * @version January 30, 2022, 9:21 am UTC
 *
 * @property integer $id_master_schema
 * @property string $day
 * @property time $time_in
 * @property time $time_out
 * @property string $late_day
 */
class SchemaSchedule extends Model
{
    public $table = 'tb_schema_shcedule';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'id_master_schema',
        'day',
        'time_in',
        'time_out',
        'late_day'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_master_schema' => 'integer',
        'day' => 'string',
        'late_day' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_master_schema' => 'required|integer',
        'day' => 'required|string',
        'time_in' => 'nullable',
        'time_out' => 'nullable',
        'late_day' => 'nullable|string'
    ];

    
}
