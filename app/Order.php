<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function foodposts(){
        return $this->hasMany('App\FoodPost');
    }
    public function orderstatus(){
        return $this->hasOne('App\Orderstatus');
    }
}
