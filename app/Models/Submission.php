<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Submission
 * @package App\Models
 * @version May 29, 2022, 3:52 am UTC
 *
 * @property integer $id_employee
 * @property integer $id_saldo_cuti
 * @property integer $id_employee_approv
 * @property string $status_approv
 * @property string $ket_cuti
 * @property integer $saldo_cuti
 * @property string $submission_date
 */
class Submission extends Model
{


    public $table = 'tb_history_cuti';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_employee',
        'id_saldo_cuti',
        'id_employee_approv',
        'id_employee_approv_2',
        'status_approv',
        'status_approv2',
        'ket_cuti',
        'saldo_cuti',
        'submission_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_employee' => 'integer',
        'id_saldo_cuti' => 'integer',
        'id_employee_approv' => 'integer',
        'id_employee_approv_2' => 'integer',
        'status_approv' => 'string',
        'status_approv2' => 'string',
        'ket_cuti' => 'string',
        'saldo_cuti' => 'integer',
        'submission_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'id_employee' => 'required|integer',
        // 'id_saldo_cuti' => 'nullable|integer',
        'id_employee_approv' => 'nullable|integer',
        'status_approv' => 'required|string',
        // 'ket_cuti' => 'required|string|max:128',
        // 'saldo_cuti' => 'required|integer',
        // 'submission_date' => 'required'
    ];

    
}
