<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Parametrage;
use App\Produit;

class ParametrageController extends Controller
{
    public function index() {

        $parametrage = Parametrage::first();
        $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    	return view('back-end.parametrage', ['parametrage' => $parametrage, 'provisoires' => $provisoires]);
    }

    public function save(Request $request) {
        
          $parametrage = Parametrage::first();
          
          $parametrage->logo        = $request->logo;
          $parametrage->titre       = $request->titre;
          $parametrage->description = $request->description;
          $parametrage->tel1        = $request->tel1;
          $parametrage->tel2        = $request->tel2;
          $parametrage->tel3        = $request->tel3;
          $parametrage->email 	    = $request->email;
          $parametrage->adresse     = $request->adresse;
		  $parametrage->googleMaps     = $request->maps;

          $parametrage->save();

          return redirect('parametrage');
    }
}
