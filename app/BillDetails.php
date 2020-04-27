<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = 'bill_details';

    public function bill(){
        return $this->belongsTo('App\Bill');
    }

    public function products(){
        return $this->belongsTo('App\Product');
    }

}
