<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    use Traits\DateFormat;

    protected $table = 'categories';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function setNameAttribute($name)
    {
    	return $this->attributes['name'] = strtolower($name);
    }

    public function posts()
    {
        return $this->belongsToMany('App\Databases\Post', 'category_post', 'cate_id', 'post_id')->withTimestamps();
    }

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }
}
