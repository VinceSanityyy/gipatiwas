<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
		'product_name', 'quantity', 'description' ,'supplier_id', 'price',
	];

    public function supplier()
    {
        return $this->hasOne('App\Supplier');
    }
}
