<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ville;

class VilleController extends Controller
{
    
    public function recupererVille(Request $request)
  {
    $codePostal   = $request->get('codePostal');
    

    $villes      = Ville::where('ville_code_postal', '=', $codePostal)->lists('id', 'ville_nom_reel');
   

  

return $villes;

  }
}
