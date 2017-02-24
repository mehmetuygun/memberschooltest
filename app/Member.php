<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	/**
	 * The database table used by the model
	 *
	 * @var        string
	 */
	protected $table = 'member';

	/**
	 * Get the school of the member
	 *
	 * @return     <object>
	 */
    public function school()
    {
    	return $this->belongsToMany('App\School');
    }

    /**
     * Get the id or ids of the school(s) the member has
     * @return [type] [description]
     */
    public function schoolId()
    {
        return $this->belongsToMany('App\School')->select('school_id');
    }
}
