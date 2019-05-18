<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'locations_times';

    protected $fillable = ['location_id', 'day', 'opening', 'closing'];

}
