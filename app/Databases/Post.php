<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'body'];

    public function setSlugAttribute($slug)
    {
    	return $this->attributes['slug'] = strtolower(preg_replace('/\s/i', '-', $slug));
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
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
