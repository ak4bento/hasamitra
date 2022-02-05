<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Repositories\BaseRepository;

/**
 * Class EmployeeRepository
 * @package App\Repositories
 * @version January 30, 2022, 8:30 am UTC
*/

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
