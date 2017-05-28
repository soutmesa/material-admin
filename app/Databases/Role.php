<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
	protected $table = 'permissions';

    protected $guarded = ['id'];

    public function permissions()
    {
        return $this->belongsToMany('App\Databases\Permission')->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\User', 'authenticable')->withTimestamps(); 
    }
}
