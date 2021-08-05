<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobReference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_references';
    protected $primaryKey = 'job_reference_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}
