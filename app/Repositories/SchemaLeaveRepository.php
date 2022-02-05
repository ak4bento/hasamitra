<?php

namespace App\Repositories;

use App\Models\SchemaLeave;
use App\Repositories\BaseRepository;

/**
 * Class SchemaLeaveRepository
 * @package App\Repositories
 * @version January 30, 2022, 9:22 am UTC
*/

class SchemaLeaveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_master_schema',
        'gender',
        'info',
        'quantify_saldo',
        'saldo'
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
        return SchemaLeave::class;
    }
}
