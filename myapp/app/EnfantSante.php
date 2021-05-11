<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnfantSante extends Model
{
	protected $table='enfant_santes';
     public function sante()
	{
	    return $this->belongsTo('App\Sante', 'sante_id');
	}
}
