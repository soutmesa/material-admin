<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = ['id'];

    public function setNameAttribute($name)
    {
    	return $this->attributes['name'] = strtolower($name);
    }

    public function posts()
    {
        return $this->belongsToMany('App\Databases\Post', 'category_post', 'post_id', 'cate_id')->withTimestamps();
    }
}
