<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustRole;
use Carbon\Carbon;

class Role extends EntrustRole
{
    use SoftDeletes;

	protected $table = 'roles';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function permissions()
    {
        return $this->belongsToMany('App\Databases\Permission')->withTimestamps();
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }
}
