<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anchor extends Model
{
    protected $primaryKey = 'anchor_id';

    protected $fillable = [
    	'anchor_fname', 'anchor_lname', 'anchor_email', 'anchor_cnumber', 'anchor_bdate', 'anchor_sex', 'anchor_status'
    ];
}
