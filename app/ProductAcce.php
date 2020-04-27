<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAcce extends Model
{
    protected $table = 'acce_products';

    protected $fillable=['name'];

    public function products(){
        return $this->hasMany('App\Product', 'id_acce ', 'id');
    }
}
