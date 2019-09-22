<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
     protected $fillable = [
        'product_id','quantity','type',
    ];

    public function history(){
        return $this->hasMany('App\Product');
    }
}
