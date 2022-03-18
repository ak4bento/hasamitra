<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Attendance
 * @package App\Models
 * @version February 28, 2022, 4:33 pm UTC
 *
 * @property integer $id_employee
 * @property string|\Carbon\Carbon $check_in
 * @property string|\Carbon\Carbon $check_out
 * @property number $lat_in
 * @property number $lng_in
 * @property number $lat_out
 * @property number $lng_out
 * @property time $schedule_in
 * @property time $schedule_out
 */
class Attendance extends Model
{
    use SoftDeletes;


    public $table = 'tb_attendance_employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_employee',
        'check_in',
        'check_out',
        'lat_in',
        'lng_in',
        'lat_out',
        'lng_out',
        'schedule_in',
        'schedule_out'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_employee' => 'integer',
        'check_in' => 'datetime',
        'check_out' => 'datetime',
        'lat_in' => 'float',
        'lng_in' => 'float',
        'lat_out' => 'float',
        'lng_out' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_employee' => 'required|integer',
        'check_in' => 'required',
        'check_out' => 'nullable',
        'lat_in' => 'required|numeric',
        'lng_in' => 'required|numeric',
        'lat_out' => 'nullable|numeric',
        'lng_out' => 'nullable|numeric',
        'schedule_in' => 'required',
        'schedule_out' => 'required'
    ];

    
}
