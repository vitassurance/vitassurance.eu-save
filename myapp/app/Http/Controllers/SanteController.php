<?php

namespace App\Http\Controllers;
use App\Prospect;
use App\Sante;
use App\Detail;
use App\EnfantSante;
use App\Parametrage;
use App\Produit;
use App\Ville;
use App\City;
use App\Profession;
use App\Regime;
use App\Secteur;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SanteRequest;

class SanteController extends Controller
{
    public function index()
	{
       
	$details = Detail::where('product', 1)->get();
    $year           = date("Y");
    $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
    $produit = Produit::where('lien', 'mutuelle-sante')->where('active', 1)->first();
    $villes      = City::all();
    $professions      = Profession::all();
     $regimes      = Regime::all();
     $secteurs      = Secteur::all();
 
    if(!empty($produit)){
        return view('front-end.mutuelle-sante', compact('details', 'year','produits', 'villes', 'professions', 'regimes', 'secteurs'));
    }else{
        return view('front-end.index', compact('details', 'marques', 'year', 'produits', 'villes', 'professions', 'regimes', 'secteurs'));
    }
    }

    public function insertionSante(SanteRequest $request)
	{
                $verification = Prospect::where('tel', $request->input('tel'))->first();
                if(!empty($verification)){
                    
                $sante 							= new Sante();
                $sante->prospect_id				= $verification->id;
                $sante->soins           		= $request->input('soins');
                $sante->hospitalisation       	= $request->input('hospitalisation');
                $sante->dentaire              	= $request->input('dentaire');
                $sante->optique             	= $request->input('optique');
                $sante->regime_id           		= $request->input('regime');
                $sante->dateEffet       	    = $request->input('dateEffet');
                $sante->codePostal              = $request->input('codePostal');
                $sante->ville_id                   = $request->input('ville');
                $sante->adresse                   = $request->input('adresse');
                $sante->profession_id                   = $request->input('profession');
                $sante->secteur_id                   = $request->input('secteurActivite');
                 $sante->produit_id                   = 1;
                $sante->visionnage              = 0;
                if(!empty($request->input('dateNaissanceConjoint'))){
                    $sante->dateNaissanceConjoint = $request->input('dateNaissanceConjoint');
                }
                $sante->save();

                 return redirect('confirmation');
                    
                }else{

                $prospect                       = new Prospect();
                $prospect->civilite                  = $request->input('civilite');
                $prospect->nom           		= $request->input('nom');
                $prospect->prenom       		= $request->input('prenom');
                $prospect->email              	= $request->input('email');
                $prospect->tel             		= $request->input('tel');
                $prospect->dateNaissance        = $request->input('dateNaissance');
                $prospect->dejaAssurer              = $request->input('dejaAssurer');
                $prospect->assureurActuel           = $request->input('assureurActuel');
                $prospect->primeContratActuel           = $request->input('primeContratActuel');
                $prospect->save();
                $sante 							= new Sante();
                $sante->prospect_id				= $prospect->id;
                $sante->soins           		= $request->input('soins');
                $sante->hospitalisation       	= $request->input('hospitalisation');
                $sante->dentaire              	= $request->input('dentaire');
                $sante->optique             	= $request->input('optique');
                $sante->regime_id           		= $request->input('regime');
                $sante->dateEffet       	    = $request->input('dateEffet');
                $sante->codePostal              = $request->input('codePostal');
                $sante->ville_id                   = $request->input('ville');
                $sante->adresse                   = $request->input('adresse');
                $sante->profession_id                  = $request->input('profession');
                 $sante->secteur_id                   = $request->input('secteurActivite');
                 $sante->produit_id                   = 1;
                $sante->visionnage              = 0;
                if(!empty($request->input('dateNaissanceConjoint'))){
                    $sante->dateNaissanceConjoint = $request->input('dateNaissanceConjoint');
                }
                $sante->save();
                if(!empty($request->input('premierE'))){
                    $enfant      = new EnfantSante();
                     $enfant->sante_id   = $sante->id;
                    $enfant->dateNaissanceEnfant = $request->input('premierE');
                    $enfant->regimeEnfant = $request->input('regime');
                    $enfant->save();
                }
                if(!empty($request->input('deuxiemeE'))){
                    $enfant      = new EnfantSante();
                    $enfant->sante_id   = $sante->id;
                    $enfant->dateNaissanceEnfant = $request->input('deuxiemeE');
                    $enfant->regimeEnfant = $request->input('regime');
                     $enfant->save();
                }
                if(!empty($request->input('troisiemeE'))){
                    $enfant      = new EnfantSante();
                     $enfant->sante_id   = $sante->id;
                    $enfant->dateNaissanceEnfant = $request->input('troisiemeE');
                    $enfant->regimeEnfant = $request->input('regime');
                     $enfant->save();
                }
                
                 return redirect('confirmation');
                }
                

	}
}
