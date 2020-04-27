<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    protected $table='products';

    protected $fillable=['name','id_type','category_id','id_acce','description','price','promotion_price','cover_image','selling'];

    public function productstype(){
        return $this->belongsTo('App\ProductType', 'id_type', 'id');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function productsacce(){
        return $this->belongsTo('App\ProductAcce', 'id_acce', 'id');

    }
    public function bill_details(){
        return $this->hasMany('App\BillDetails');
    }
}
