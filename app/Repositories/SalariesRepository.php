<?php

namespace App\Repositories;

use App\Models\Salaries;
use App\Repositories\BaseRepository;

/**
 * Class SalariesRepository
 * @package App\Repositories
 * @version January 30, 2022, 9:23 am UTC
*/

class SalariesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Salaries::class;
    }
}
