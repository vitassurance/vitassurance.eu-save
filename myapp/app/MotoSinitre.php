<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotoSinitre extends Model
{
    public function moto()
	{
	    return $this->belongsTo('App\Moto', 'moto_id');
	}
}
