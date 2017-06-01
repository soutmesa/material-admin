<?php

namespace App\Databases\Traits;

use Carbon\Carbon;

trait DateFormat
{
	public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }
}