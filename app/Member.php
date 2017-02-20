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
	 * @return     <<object>
	 */
    public function school()
    {
    	return $this->belongsTo('App\School');
    }
}
