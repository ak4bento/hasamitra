<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version January 30, 2022, 8:30 am UTC
 *
 * @property string $nik
 * @property string $pass
 * @property string $name
 * @property string $domain
 * @property string $phone
 * @property string $email
 * @property string $gender
 * @property string $region
 * @property string $imei
 * @property integer $id_organization
 * @property integer $id_approv
 * @property integer $id_employee_approv_permission1
 * @property integer $id_employee_approv_permission2
 * @property integer $id_master_schema
 * @property string $avatar
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'tb_employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nik',
        'pass',
        'name',
        'domain',
        'phone',
        'email',
        'gender',
        'region',
        'imei',
        'id_organization',
        'id_approv',
        'id_employee_approv_permission1',
        'id_employee_approv_permission2',
        'id_master_schema',
        'avatar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nik' => 'string',
        'pass' => 'string',
        'name' => 'string',
        'domain' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'region' => 'string',
        'imei' => 'string',
        'id_organization' => 'integer',
        'id_approv' => 'integer',
        'id_employee_approv_permission1' => 'integer',
        'id_employee_approv_permission2' => 'integer',
        'id_master_schema' => 'integer',
        'avatar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required|string|max:32',
        'name' => 'required|string|max:64',
        'domain' => 'required|string|max:128',
        'phone' => 'required|string|max:32',
        'email' => 'required|string|max:128',
        'gender' => 'required|string',
        'region' => 'required|string',
        'imei' => 'nullable|string|max:32',
        'id_organization' => 'required|integer',
        'id_approv' => 'nullable|integer',
        'id_employee_approv_permission1' => 'nullable|integer',
        'id_employee_approv_permission2' => 'nullable|integer',
        'id_master_schema' => 'nullable|integer',
        'avatar' => 'nullable|string|max:100'
    ];

    public function organizational()
    {
        return $this->belongTo(Organizational::class);
    }
}
