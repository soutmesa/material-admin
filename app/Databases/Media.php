<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
	use SoftDeletes;

    use Traits\DateFormat;

	protected $table = 'medias';

	protected $fillable = ['title', 'slug', 'body'];

	protected $dates = ['deleted_at'];

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }
}
