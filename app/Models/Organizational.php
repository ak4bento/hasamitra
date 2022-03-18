<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Organizational
 * @package App\Models
 * @version January 30, 2022, 8:29 am UTC
 *
 * @property integer $id_company
 * @property integer $id_department
 * @property string $job_title
 * @property integer $id_manager_org
 */
class Organizational extends Model
{
    use SoftDeletes;


    public $table = 'tb_organizational_structure74';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'id_company',
        'id_department',
        'job_title',
        'id_manager_org',
        'share',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_company' => 'integer',
        'id_department' => 'integer',
        'job_title' => 'string',
        'id_manager_org' => 'integer',
        'share' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_company' => 'required|integer',
        'id_department' => 'required|integer',
        'job_title' => 'required|string|max:32',
        'id_manager_org' => 'nullable|integer',
    ];

    public function commpany()
    {
        return $this->hasMany(Commpany::class);
    }
    
    public function employee()
    {
        return $this->hasMany(Employee::class, 'id', 'id_organization');
    }

    public function deparment()
    {
        return $this->belongTo(Deparment::class);
    }
}
