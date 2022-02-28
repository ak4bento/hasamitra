<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Models\User;
use App\Repositories\BaseRepository;

/**
 * Class AdminRepository
 * @package App\Repositories
 * @version February 28, 2022, 3:06 pm UTC
*/

class AdminRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
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
        return User::class;
    }
}
