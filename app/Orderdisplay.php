<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdisplay extends Model
{
    public function foodposts(){
        return $this->belongsTo('App\Foodpost','food_Id','id');
    }
}
