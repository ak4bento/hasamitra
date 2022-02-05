<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class Department
 * @package App\Models
 * @version January 30, 2022, 8:27 am UTC
 *
 * @property string $department
 */
class Department extends Model
{


    public $table = 'tb_department';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'department'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'department' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'department' => 'required|string|max:64'
    ];

    
}
