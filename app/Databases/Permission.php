<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
	protected $table = 'roles';

    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany('App\Databases\Role')->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\User', 'authenticable')->withTimestamps(); 
    }
}
