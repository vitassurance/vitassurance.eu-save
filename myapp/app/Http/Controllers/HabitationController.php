<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Detail;

use App\Parametrage;
use App\Produit;
use App\Prospect;
use App\Habitation;
use App\Ville;
use App\City;
use App\Profession;
use App\Matrimoniale;
use App\EnfantSante;
use App\Secteur;

class HabitationController extends Controller
{
    public function index()
	{

        
	$details = Detail::where('product', 3)->get();
	$year           = date("Y");
    $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
    $produit = Produit::where('lien', 'habitation')->where('active', 1)->first();
    $villes      = City::all();
    $professions      = Profession::all();
    $matrimoniales      = Matrimoniale::all();
    $secteurs      = Secteur::all();
 
    if(!empty($produit)){
        return view('front-end.habitation', compact('details', 'year','produits', 'villes', 'professions', 'matrimoniales', 'secteurs'));
    }else{
        return view('front-end.index', compact('details', 'year', 'produits', 'villes', 'professions', 'matrimoniales', 'secteurs'));
    }
    }

     public function insertionHabitation(Request $request)
	{
                $verification = Prospect::where('tel', $request->input('tel'))->first();
                if(!empty($verification)){
                    
                $habitation 							= new Habitation();
                $habitation->prospect_id				= $verification->id;
                $habitation->typeLogement           		= $request->input('typeLogement');
                $habitation->etat       	= $request->input('etat');
                $habitation->typeResidence              	= $request->input('typeResidence');
                $habitation->jhabite              	= $request->input('jhabite');
                $habitation->dateEffet             	= $request->input('dateEffet');
                $habitation->codePostal           		= $request->input('codePostal');
                $habitation->ville_id       	    = $request->input('ville');
                $habitation->jeCherche       	    = $request->input('jeCherche');
                $habitation->nombrePieceM              = $request->input('nombrePieceM');
                $habitation->nombrePieceP                   = $request->input('nombrePieceP');
                $habitation->surfaceHabitable             	= $request->input('surfaceHabitable');
                $habitation->etageAppartement           		= $request->input('etageAppartement');
                $habitation->joursInhabite       	    = $request->input('joursInhabite');
                $habitation->capitalMobilier              = $request->input('capitalMobilier');
                
                $habitation->dernierAssureur             	= $request->input('dernierAssureur');
                $habitation->monContratActuel           		= $request->input('monContratActuel');
                $habitation->joursInhabite       	    = $request->input('joursInhabite');
                $habitation->capitalMobilier              = $request->input('capitalMobilier');
                $habitation->profession_id              = $request->input('profession');
                $habitation->matrimoniale_id              = $request->input('situationMatrimoniale');
                $habitation->secteur_id              = $request->input('secteurActivite');
                $habitation->produit_id                   = 6;
                
                $habitation->visionnage              = 0;
                // if(!empty($request->input('dateNaissanceConjoint'))){
                //     $sante->dateNaissanceConjoint = $request->input('dateNaissanceConjoint');
                // }
                $habitation->save();

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
                $prospect->assureurActuel           = $request->input('dernierAssureur');
                $prospect->primeContratActuel           = $request->input('primeContratActuel');
                $prospect->save();

                $habitation 							= new Habitation();
                $habitation->prospect_id			= $prospect->id;
                $habitation->typeLogement          	= $request->input('typeLogement');
                $habitation->etat       			= $request->input('etat');
                $habitation->jhabite              	= $request->input('jhabite');
                $habitation->typeResidence          = $request->input('typeResidence');
                $habitation->dateEffet             	= $request->input('dateEffet');
                $habitation->codePostal           		= $request->input('codePostal');
                $habitation->ville_id       	    = $request->input('ville');
                $habitation->jeCherche       	    = $request->input('jeCherche');
                $habitation->nombrePieceM              = $request->input('nombrePieceM');
                $habitation->nombrePieceP                   = $request->input('nombrePieceP');
                $habitation->surfaceHabitable             	= $request->input('surfaceHabitable');
                $habitation->etageAppartement           		= $request->input('etageAppartement');
                $habitation->joursInhabite       	    = $request->input('joursInhabite');
                $habitation->capitalMobilier              = $request->input('capitalMobilier');
                $habitation->dernierAssureur             	= $request->input('dernierAssureur');
                $habitation->monContratActuel           		= $request->input('monContratActuel');
                $habitation->joursInhabite       	    = $request->input('joursInhabite');
                $habitation->capitalMobilier              = $request->input('capitalMobilier');
                $habitation->profession_id              = $request->input('profession');
                $habitation->matrimoniale_id              = $request->input('situationMatrimoniale');
                $habitation->secteur_id              = $request->input('secteurActivite');
                $habitation->produit_id                   = 6;
               
                $habitation->visionnage              = 0;
                $habitation->save();
                if(!empty($request->input('enfant1'))){
                    $enfant      = new EnfantSante();
                     //$enfant->habitation_id   = $habitation->id;
					 $enfant->sante_id   = $habitation->id;
                    $enfant->dateNaissanceEnfant = $request->input('premierE');
                    $enfant->regimeEnfant = $request->input('regime');
                    $enfant->save();
                }
                if(!empty($request->input('enfant2'))){
                   $enfant      = new EnfantSante();
                     //$enfant->habitation_id   = $habitation->id;
					 $enfant->sante_id   = $habitation->id;
                    $enfant->dateNaissanceEnfant = $request->input('premierE');
                    $enfant->regimeEnfant = $request->input('regime');
                    $enfant->save();
                }
                if(!empty($request->input('enfant3'))){
                   $enfant      = new EnfantSante();
                     $enfant->habitation_id   = $habitation->id;
                    $enfant->dateNaissanceEnfant = $request->input('premierE');
                    $enfant->regimeEnfant = $request->input('regime');
                    $enfant->save();
                }
                
                 return redirect('confirmation');
                }
                

	}
}
