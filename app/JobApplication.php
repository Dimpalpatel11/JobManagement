<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_applications';
    protected $primaryKey = 'job_application_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     public function jobReference(){
        return $this->hasOne('App\JobReference','job_application_id','job_application_id');
    }
}
