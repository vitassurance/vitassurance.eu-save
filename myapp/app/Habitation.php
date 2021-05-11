<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitation extends Model
{
    public function prospect()
	{
	    return $this->belongsTo('App\Prospect', 'prospect_id');
	}

	public function profession()
	{
	    return $this->belongsTo('App\Profession', 'profession_id');
	}

	public function matrimoniale()
	{
	    return $this->belongsTo('App\Matrimoniale', 'matrimoniale_id');
	}


	public function secteur()
	{
	    return $this->belongsTo('App\Secteur', 'secteur_id');
	}

	public function ville()
	{
	    return $this->belongsTo('App\Ville', 'ville_id');
	}
}
