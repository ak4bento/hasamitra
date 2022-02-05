<?php

namespace App\Repositories;

use App\Models\SchemaSchedule;
use App\Repositories\BaseRepository;

/**
 * Class SchemaScheduleRepository
 * @package App\Repositories
 * @version January 30, 2022, 9:21 am UTC
*/

class SchemaScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_master_schema',
        'day',
        'time_in',
        'time_out',
        'late_day'
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
        return SchemaSchedule::class;
    }
}
