<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class ShiftSchedule
 * @package App\Models
 * @version January 30, 2022, 9:23 am UTC
 *
 * @property integer $id_employee
 * @property string $status_shift
 * @property string $day
 * @property string|\Carbon\Carbon $in_hour
 * @property string|\Carbon\Carbon $out_hour
 */
class ShiftSchedule extends Model
{


    public $table = 'shit_employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_employee',
        'status_shift',
        'day',
        'in_hour',
        'out_hour'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_employee' => 'integer',
        'status_shift' => 'string',
        'day' => 'string',
        'in_hour' => 'datetime',
        'out_hour' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_employee' => 'required|integer',
        'status_shift' => 'required|string',
        'day' => 'required|string',
        'in_hour' => 'nullable',
        'out_hour' => 'nullable'
    ];

    
}
