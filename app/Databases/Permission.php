<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends EntrustPermission
{
    use SoftDeletes;

    use Traits\DateFormat;

	protected $table = 'permissions';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function roles()
    {
        return $this->belongsToMany('App\Databases\Role')->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\User', 'authenticable')->withTimestamps(); 
    }
}
