<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoEnfant extends Model
{
    protected $table='auto_enfants';
     public function auto()
	{
	    return $this->belongsTo('App\Auto', 'auto_id');
	}
}
