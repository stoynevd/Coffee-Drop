<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculation extends Model {

    protected $table = 'calculations';

    protected $fillable = ['name', 'ristretto', 'espresso', 'lungo', 'amount'];

}
