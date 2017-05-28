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
}
