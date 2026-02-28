<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessHour extends Model
{
    use SoftDeletes;

    protected $casts = [
        'is_closed' => 'boolean',
        'day_of_week' => 'integer',
        'sort_order' => 'integer',
    ];
}
