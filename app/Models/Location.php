<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Location\Time;

class Location extends Model {

    protected $table = 'locations';

    protected $fillable = ['postcode', 'long', 'lat'];

    public function times() {
        return $this->hasMany('App\Models\Location\Time');
    }

}
