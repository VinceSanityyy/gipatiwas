<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Damage extends Model
{
    protected $fillable = [
        'product_id','quantity','price',
    ];

    public function damage(){
        return $this->hasMany('App\Product');
    }
}
