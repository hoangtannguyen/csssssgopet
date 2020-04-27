<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    // protected $fillable = ['customer_id','date_order','total','payment','note'];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function bill_details(){
        return $this->hasMany('App\BillDetails');
    }


}
