<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany('App\Databases\Post')->withTimestamps();
    }
}
