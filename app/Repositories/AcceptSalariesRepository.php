<?php

namespace App\Repositories;

use App\Models\AcceptSalaries;
use App\Repositories\BaseRepository;

/**
 * Class AcceptSalariesRepository
 * @package App\Repositories
 * @version June 1, 2022, 4:21 am UTC
*/

class AcceptSalariesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return AcceptSalaries::class;
    }
}
