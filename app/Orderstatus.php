<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderstatus extends Model
{
    public function order(){
        return $this->belongsTo('App\Order');
    }
}
