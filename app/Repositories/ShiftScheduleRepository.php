<?php

namespace App\Repositories;

use App\Models\ShiftSchedule;
use App\Repositories\BaseRepository;

/**
 * Class ShiftScheduleRepository
 * @package App\Repositories
 * @version January 30, 2022, 9:23 am UTC
*/

class ShiftScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_employee',
        'status_shift',
        'day',
        'in_hour',
        'out_hour'
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
        return ShiftSchedule::class;
    }
}
