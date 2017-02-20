<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	/**
	 * The database table used by the model
	 *
	 * @var        string
	 */
	protected $table = 'school';

	/**
	 * Get the members of the school
	 *
	 * @return     <object>
	 */
    public function members()
    {
    	return $this->hasMany('App\Member');
    }
}
