<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
	protected $fillable = [
		'product_name', 'quantity', 'description' ,'supplier_id', 'price',
	];

    public function supplier()
    {
        return $this->hasOne('App\Supplier');
    }
}
