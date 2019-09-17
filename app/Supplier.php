<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Supplier extends Model
{
    use SoftDeletes;
	protected $fillable = [
		'name', 'email', 'address','contact','status',
	];

	public function product()
    {
        return $this->hasMany('App\Product');
    }

}
