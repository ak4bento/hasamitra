<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Salaries
 * @package App\Models
 * @version January 30, 2022, 9:23 am UTC
 *
 * @property integer $id_company
 * @property integer $id_org
 * @property integer $id_employee
 * @property integer $salary
 * @property string $status_profit
 * @property string $info_profit
 * @property string $from_date
 * @property string $to_date
 * @property integer $id_employee_approv
 */
class Salaries extends Model
{
    use SoftDeletes;


    public $table = 'tb_salaries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_company',
        'id_org',
        'id_employee',
        'salary',
        'status_profit',
        'info_profit',
        'from_date',
        'to_date',
        'id_employee_approv'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_company' => 'integer',
        'id_org' => 'integer',
        'id_employee' => 'integer',
        'salary' => 'integer',
        'status_profit' => 'string',
        'info_profit' => 'string',
        'from_date' => 'date',
        'to_date' => 'date',
        'id_employee_approv' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_company' => 'nullable|integer',
        'id_org' => 'nullable|integer',
        'id_employee' => 'nullable|integer',
        'salary' => 'required|integer',
        'status_profit' => 'required|string|max:1',
        'info_profit' => 'required|string|max:64',
        'from_date' => 'required',
        'to_date' => 'required',
        'id_employee_approv' => 'nullable|integer'
    ];

    
}
