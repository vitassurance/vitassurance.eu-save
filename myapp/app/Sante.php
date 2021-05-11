<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sante extends Model
{
    public function prospect()
	{
	    return $this->belongsTo('App\Prospect', 'prospect_id');
	}

	public function enfantsante()
    {
        return $this->hasMany('App\EnfantSante');
    }

    public function produit()
	{
	    return $this->belongsTo('App\Produit', 'produit_id');
	}

	public function profession()
	{
	    return $this->belongsTo('App\Profession', 'profession_id');
	}

	public function trouverProfession($id)
	{
		$profession = Profession::find($id);
	    return $profession->libelle;
	}

	public function regime()
	{
	    return $this->belongsTo('App\Regime', 'regime_id');
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
