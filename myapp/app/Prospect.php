<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    public function sante()
    {
        return $this->hasMany('App\Sante');
    }

    public function obseque()
    {
        return $this->hasMany('App\Obseque');
    }

    public function moto()
    {
        return $this->hasMany('App\Moto');
    }

    public function auto()
    {
        return $this->hasMany('App\Auto');
    }

    public function habitation()
    {
        return $this->hasMany('App\Habitation');
    }

    public function provisoire()
    {
        return $this->hasMany('App\LeadProvisoire');
    }
}
