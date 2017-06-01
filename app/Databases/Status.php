<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Status extends Model
{
	use SoftDeletes;

    use Traits\DateFormat;

	protected $table = 'status';

	protected $dates = ['deleted_at'];

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }
}
