<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class AcceptSalaries
 * @package App\Models
 * @version June 1, 2022, 4:21 am UTC
 *
 * @property integer $id_company
 * @property integer $id_org
 * @property integer $id_employee
 * @property string $date_salary
 * @property string $accept_date
 * @property integer $salary_basic
 * @property integer $salary_allowance
 * @property integer $salary_food
 * @property integer $salary_daily
 * @property integer $salary_target
 * @property integer $salary_cut
 * @property string $status_salary
 */
class AcceptSalaries extends Model
{


    public $table = 'tb_accept_salaries';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_company',
        'id_org',
        'id_employee',
        'date_salary',
        'accept_date',
        'salary_basic',
        'salary_allowance',
        'salary_food',
        'salary_daily',
        'salary_target',
        'salary_cut',
        'status_salary'
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
        'date_salary' => 'date',
        'accept_date' => 'date',
        'salary_basic' => 'integer',
        'salary_allowance' => 'integer',
        'salary_food' => 'integer',
        'salary_daily' => 'integer',
        'salary_target' => 'integer',
        'salary_cut' => 'integer',
        'status_salary' => 'string'
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
        'date_salary' => 'required',
        'accept_date' => 'nullable',
        'salary_basic' => 'required',
        'salary_allowance' => 'required|integer',
        'salary_food' => 'required|integer',
        'salary_daily' => 'required|integer',
        'salary_target' => 'required|integer',
        'salary_cut' => 'required|integer',
        'status_salary' => 'required|string'
    ];

    
}
