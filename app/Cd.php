<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{

    protected $fillable = ['title', 'poster','author','genre','year'];

}
