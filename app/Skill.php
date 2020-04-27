<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';

    protected $fillable = ['date','name','name2','describe','describe2','describetion','describetion2','image','image2'];
}
