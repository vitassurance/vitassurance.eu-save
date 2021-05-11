<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function provisoire()
    {
        return $this->hasMany('App\LeadProvisoire');
    }

    public function sante()
    {
        return $this->hasMany('App\Sante');
    }

    public function auto()
    {
        return $this->hasMany('App\Auto');

    }

    public function moto()
    {
        return $this->hasMany('App\Moto');
    }

    public function obseque()
    {
        return $this->hasMany('App\Obseque');
    }
    
    public function habitation()
    {
        return $this->hasMany('App\Habitation');
    }

  }
