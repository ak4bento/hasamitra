<?php

namespace App\Repositories;

use App\Models\ReportingEmployee;
use App\Repositories\BaseRepository;

/**
 * Class ReportingEmployeeRepository
 * @package App\Repositories
 * @version June 28, 2022, 12:32 pm UTC
*/

class ReportingEmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_employee',
        'information',
        'imei',
        'jenis'
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
        return ReportingEmployee::class;
    }
}
