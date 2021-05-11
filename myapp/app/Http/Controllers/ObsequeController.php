<?php

namespace App\Http\Controllers;
use App\Prospect;
use App\Obseque;
use App\Detail;
use App\Parametrage;
use App\Produit;
use App\Ville;
use App\City;
use App\Matrimoniale;
use App\Profession;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ObsequeRequest;

class ObsequeController extends Controller
{

    public function index()
	{
       
	$details = Detail::where('product', 2)->get();
    $year           = date("Y");
    $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
    $produit = Produit::where('lien', 'obseque')->where('active', 1)->first();
    $villes      = City::all();
    $matrimoniales      = Matrimoniale::all();
    $professions      = Profession::all();
 
   if(!empty($produit)){
        return view('front-end.obseque', compact('details', 'year','produits', 'villes', 'matrimoniales', 'professions'));
    }else{
        return view('front-end.index', compact('details', 'marques', 'year', 'produits', 'villes', 'matrimoniales', 'professions'));
    }
    }
    public function insertionObseque(ObsequeRequest $request)
	{
                $verification = Prospect::where('tel', $request->input('tel'))->first();
                if(!empty($verification)){
                    
                $obseque 							= new Obseque();
                $obseque->prospect_id				= $verification->id;
                $obseque->interet           		= $request->input('interet');
                $obseque->montantCouvert        	= $request->input('montantCouvert');
                
                $obseque->dateEffet             	= $request->input('dateEffet');
                $obseque->codePostal           		= $request->input('codePostal');
                $obseque->dateNaissanceConjoint     = $request->input('dateNaissanceConjoint');
                $obseque->montantCouvertConjoint    = $request->input('montantCouvertConjoint');
                $obseque->ville_id           		    = $request->input('ville');
                $obseque->adresse                     = $request->input('adresse');
                $obseque->matrimoniale_id                     = $request->input('situationMatrimoniale');
                $obseque->profession_id                   = $request->input('profession');
                $obseque->produit_id                   = 7;
                $obseque->save();
                
                return redirect('confirmation');
                
                    
                }else{
                $prospect                    	    = new Prospect();
                $prospect->civilite                  = $request->input('civilite');
                $prospect->nom           		    = $request->input('nom');
                $prospect->prenom       		    = $request->input('prenom');
                $prospect->email              	    = $request->input('email');
                $prospect->tel             		    = $request->input('tel');
                $prospect->dateNaissance             = $request->input('dateNaissance');
                $prospect->dejaAssurer              = $request->input('dejaAssurer');
                $prospect->assureurActuel           = $request->input('assureurActuel');
                $prospect->primeContratActuel           = $request->input('primeContratActuel');
                $prospect->save();
                $obseque 							= new Obseque();
                $obseque->prospect_id				= $prospect->id;
                $obseque->interet           		= $request->input('interet');
                $obseque->montantCouvert       	    = $request->input('montantCouvert');
                $obseque->dateNaissance             = $request->input('dateNaissance');
                $obseque->dateEffet             	= $request->input('dateEffet');
                $obseque->codePostal           		= $request->input('codePostal');
                $obseque->dateNaissanceConjoint     = $request->input('dateNaissanceConjoint');
                $obseque->montantCouvertConjoint    = $request->input('montantCouvertConjoint');
                $obseque->ville_id           		    = $request->input('ville');
                $obseque->adresse                     = $request->input('adresse');
                $obseque->matrimoniale_id           = $request->input('situationMatrimoniale');
                $obseque->profession_id                   = $request->input('profession');
                $obseque->produit_id                   = 7;
                $obseque->save();
                
                return redirect('confirmation');
                
                
                }
        

               

	}
}
