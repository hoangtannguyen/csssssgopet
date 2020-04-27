<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acce extends Model
{
    protected $table = 'access';
    protected $fillable=['name','uses','expiry','amount','price','image'];
}
