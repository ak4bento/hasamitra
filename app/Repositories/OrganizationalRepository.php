<?php

namespace App\Repositories;

use App\Models\Organizational;
use App\Repositories\BaseRepository;

/**
 * Class OrganizationalRepository
 * @package App\Repositories
 * @version January 30, 2022, 8:29 am UTC
*/

class OrganizationalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_company',
        'id_department',
        'job_title',
        'id_manager_org'
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
        return Organizational::class;
    }
}
