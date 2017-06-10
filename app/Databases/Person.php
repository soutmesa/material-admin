<?php

namespace App\Databases;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    use Traits\DateFormat;

	protected $table = 'people';

	// protected $fillable = ['title', 'slug', 'body'];

	protected $dates = ['deleted_at'];
}
