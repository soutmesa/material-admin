<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
	use SoftDeletes;

    use Traits\DateFormat;

    protected $table = 'tags';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function posts()
    {
        return $this->belongsToMany('App\Databases\Post')->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }
}
