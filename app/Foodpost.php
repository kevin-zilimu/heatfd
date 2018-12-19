<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodpost extends Model
{
    public function order(){
        return $this->belongsTo('App\Order');
    }
    public function user(){
         return $this->belongsTo('App\User','id','User_Id');
    }
    public function orderdisplay(){
        return $this->hasOne('App\Orderdisplay','id','food_Id');
    }
}
