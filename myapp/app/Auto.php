<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    public function autoenfant()
    {
        return $this->hasMany('App\AutoEnfant');
    }

    public function prospect()
	{
	    return $this->belongsTo('App\Prospect', 'prospect_id');
	}

	public function profession()
	{
	    return $this->belongsTo('App\Profession', 'profession');
	}
}
