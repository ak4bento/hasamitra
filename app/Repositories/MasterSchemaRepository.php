<?php

namespace App\Repositories;

use App\Models\MasterSchema;
use App\Repositories\BaseRepository;

/**
 * Class MasterSchemaRepository
 * @package App\Repositories
 * @version January 30, 2022, 8:28 am UTC
*/

class MasterSchemaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_department',
        'initial_schema'
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
        return MasterSchema::class;
    }
}
