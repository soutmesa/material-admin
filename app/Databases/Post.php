<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use Traits\DateFormat;
    
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'body'];

    protected $dates = ['deleted_at'];

    public function setSlugAttribute($slug)
    {
    	return $this->attributes['slug'] = strtolower(preg_replace('/\s/i', '-', $slug));
    }

    public function authenticated()
    {
        return $this->morphToMany('App\Databases\User', 'authenticable')->withTimestamps(); 
    }

    public function categories()
    {
        return $this->belongsToMany('App\Databases\Category', 'category_post', 'post_id', 'cate_id')->withTimestamps();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Databases\Tag')->withTimestamps();
    }
}
