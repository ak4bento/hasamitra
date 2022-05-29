<?php

namespace App\Repositories;

use App\Models\Submission;
use App\Repositories\BaseRepository;

/**
 * Class SubmissionRepository
 * @package App\Repositories
 * @version May 29, 2022, 3:52 am UTC
*/

class SubmissionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_employee',
        'id_saldo_cuti',
        'id_employee_approv',
        'status_approv',
        'ket_cuti',
        'saldo_cuti',
        'submission_date'
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
        return Submission::class;
    }
}
