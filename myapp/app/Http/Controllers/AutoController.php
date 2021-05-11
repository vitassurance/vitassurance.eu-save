<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Parametrage;

use App\Detail;

use App\MarqueMoto;

use App\Auto;

use App\Produit;

use App\City;

use App\Marque;

use App\Http\Requests\AutoRequest;

class AutoController extends Controller
{
      public function index()
	{
        
		$marques = marque::all(); 
	$details = Detail::where('product', 3)->get();
    $year           = date("Y");
   $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
    $produit = Produit::where('lien', 'auto')->where('active', 1)->first();
    $villes = City::all();
     if(!empty($produit)){
        return view('front-end.auto', compact('details', 'marques', 'year','produits', 'villes'));
    }else{
        return view('front-end.index', compact('details', 'marques', 'year', 'produits', 'villes'));
    }
    }

    public function insertionAuto(AutoRequest $request)
	{
                $verification = Prospect::where('tel', $request->input('tel'))->first();
                if(!empty($verification)){
                    
                $auto 							      = new Auto();
                $auto->prospect_id				      = $verification->id;
                $auto->maRecherche           		  = $request->input('maRecherche');
                $auto->etatAuto        	              = $request->input('etatAuto');
                $auto->possedeDepuis             	  = $request->input('possedeDepuis');
                $auto->titulaireCarte                 = $request->input('titulaireCarte');
                $auto->conducteurSecondaire           = $request->input('conducteurSecondaire');
                $auto->situationMatrimoniale          = $request->input('situationMatrimoniale');
                $auto->profession           		  = $request->input('profession');
                $auto->professionExacte               = $request->input('professionExacte');
                $auto->secteurActivite                = $request->input('secteurActivite');
                $auto->typePermis                     = $request->input('typePermis');
                $auto->dateObtention                  = $request->input('dateObtention');
                $auto->infraction                     = $request->input('infraction');
                $auto->quandSRA                       = $request->input('quandSRA');
                $auto->dureeSR                        = $request->input('dureeSR');
                $auto->causeAnnulation                = $request->input('causeAnnulation');
                $auto->dateAchatVehicule              = $request->input('dateAchatVehicule');
                $auto->datePremiereCirculationMois    = $request->input('datePremiereCirculationMois');
                $auto->datePremiereCirculationAnnee   = $request->input('datePremiereCirculationAnnee');
                $auto->nombreKiloAn                   = $request->input('nombreKiloAn');
                $auto->modeFinancement                = $request->input('modeFinancement');
                $auto->usagePrevu                     = $request->input('typeParking');
                $auto->codePostalNuit                 = $request->input('codePostalNuit');
                $auto->villeNuit                      = $request->input('villeNuit');
                $auto->codePostalTravail              = $request->input('codePostalTravail');
                $auto->villeTravail                   = $request->input('villeTravail');
                $auto->marqueAuto                     = $request->input('marqueAuto');
                $auto->modelAuto                      = $request->input('modelAuto');
                $auto->actuellementAssure             = $request->input('actuellementAssure');
                $auto->nombreAnnee                    = $request->input('nombreAnnee');
                $auto->bonusMalus                     = $request->input('bonusMalus');
                $auto->objetResiliation               = $request->input('objetResiliation');
                $auto->assureurActuel                 = $request->input('assureurActuel');
                $auto->nonAssureDepuis                = $request->input('nonAssureDepuis');
                $auto->dateEffet                      = $request->input('dateEffet');
                $auto->codePostal                     = $request->input('codePostal');
                $auto->ville                          = $request->input('ville');
                $auto->save();
                
                return redirect('confirmation');
                
                    
                }else{
                $prospect                    	     = new Prospect();
                $prospect->civilite                  = $request->input('civilite');
                $prospect->nom           		     = $request->input('nom');
                $prospect->prenom       		     = $request->input('prenom');
                $prospect->email              	     = $request->input('email');
                $prospect->tel             		     = $request->input('tel');
                $prospect->dateNaissance             = $request->input('dateNaissance');
                $prospect->save();
                $auto                                = new Auto();
                $auto->prospect_id                   = $verification->id;
                $auto->maRecherche                   = $request->input('maRecherche');
                $auto->etatAuto                      = $request->input('etatAuto');
                
                $auto->possedeDepuis                 = $request->input('possedeDepuis');
                $auto->titulaireCarte                = $request->input('titulaireCarte');
                $auto->conducteurSecondaire          = $request->input('conducteurSecondaire');
                $auto->situationMatrimoniale         = $request->input('situationMatrimoniale');
                $auto->profession                    = $request->input('profession');
                $auto->professionExacte              = $request->input('professionExacte');
                $auto->secteurActivite               = $request->input('secteurActivite');
                $auto->typePermis                    = $request->input('typePermis');
                $auto->dateObtention                 = $request->input('dateObtention');
                $auto->infraction                    = $request->input('infraction');
                $auto->quandSRA                      = $request->input('quandSRA');
                $auto->dureeSR                       = $request->input('dureeSR');
                $auto->causeAnnulation               = $request->input('causeAnnulation');
                $auto->dateAchatVehicule             = $request->input('dateAchatVehicule');
                $auto->datePremiereCirculationMois   = $request->input('datePremiereCirculationMois');
                $auto->datePremiereCirculationAnnee  = $request->input('datePremiereCirculationAnnee');
                $auto->nombreKiloAn                  = $request->input('nombreKiloAn');
                $auto->modeFinancement               = $request->input('modeFinancement');
                $auto->usagePrevu                    = $request->input('typeParking');
                $auto->codePostalNuit                = $request->input('codePostalNuit');
                $auto->villeNuit                     = $request->input('villeNuit');
                $auto->codePostalTravail             = $request->input('codePostalTravail');
                $auto->villeTravail                  = $request->input('villeTravail');
                $auto->marqueAuto                    = $request->input('marqueAuto');
                $auto->modelAuto                     = $request->input('modelAuto');
                $auto->actuellementAssure            = $request->input('actuellementAssure');
                $auto->nombreAnnee                   = $request->input('nombreAnnee');
                $auto->bonusMalus                    = $request->input('bonusMalus');
                $auto->objetResiliation              = $request->input('objetResiliation');
                $auto->assureurActuel                = $request->input('assureurActuel');
                $auto->nonAssureDepuis               = $request->input('nonAssureDepuis');
                $auto->dateEffet                     = $request->input('dateEffet');
                $auto->codePostal                    = $request->input('codePostal');
                $auto->ville                         = $request->input('ville');
                $auto->save();
                
                return redirect('confirmation');
                
                
                }
        

               

	}
}
