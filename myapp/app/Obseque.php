<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obseque extends Model
{
    public function prospect()
	{
	    return $this->belongsTo('App\Prospect', 'prospect_id');
	}

	public function produit()
	{
	    return $this->belongsTo('App\Produit', 'produit_id');
	}

	public function profession()
	{
	    return $this->belongsTo('App\Profession', 'profession_id');
	}

	public function matrimoniale()
	{
	    return $this->belongsTo('App\Matrimoniale', 'matrimoniale_id');
	}

	public function ville()
	{
	    return $this->belongsTo('App\Ville', 'ville_id');
	}
}
