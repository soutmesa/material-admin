<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustRole;
use Carbon\Carbon;

class Role extends EntrustRole
{
    use SoftDeletes;

    use Traits\DateFormat;

	protected $table = 'roles';

    protected $guarded = ['id', 'permissions'];

    protected $dates = ['deleted_at'];

    public function permissions()
    {
        return $this->belongsToMany('App\Databases\Permission', 'permission_role', 'role_id', 'permission_id')->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }
}
