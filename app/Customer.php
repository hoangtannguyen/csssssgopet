<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

     protected $fillable  = ['lastname','firstname','email','address','phone'];

    public function bill(){
        return $this->hasMany('App\Bill');
    }



}
