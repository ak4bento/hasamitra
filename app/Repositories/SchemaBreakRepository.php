<?php

namespace App\Repositories;

use App\Models\SchemaBreak;
use App\Repositories\BaseRepository;

/**
 * Class SchemaBreakRepository
 * @package App\Repositories
 * @version May 29, 2022, 3:03 am UTC
*/

class SchemaBreakRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_master_schema',
        'gender',
        'info',
        'quantify_saldo',
        'saldo',
        'saldo_max',
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
        return SchemaBreak::class;
    }
}
