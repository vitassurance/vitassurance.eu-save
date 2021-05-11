<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Detail;

use App\Ville;

use App\MarqueMoto;

use App\Parametrage;

use App\Produit;

use App\City;

use App\Prospect;

use App\Moto;

use App\Profession;

use App\Matrimoniale;

class MotoController extends Controller
{
    public function index()
	{
       
	$details = Detail::where('product', 3)->get();
    $year           = date("Y");

 
    return view('front-end.moto', compact('details', 'year'));
    }

    public function dex()
	{
       
		$marques = marqueMoto::all(); 
	$details = Detail::where('product', 3)->get();
    $year           = date("Y");
    $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
    $produit = Produit::where('lien', 'moto2')->where('active', 1)->first();
    $villes      = City::all();
    $professions  = Profession::all();
    $matrimoniales  = Matrimoniale::all();
    if(!empty($produit)){
        return view('front-end.moto2', compact('details', 'marques', 'year','produits', 'villes', 'professions', 'matrimoniales'));
    }else{
        return view('front-end.index', compact('details', 'marques', 'year', 'produits', 'villes', 'professions', 'matrimoniales'));
    }
    
    }

    public function insertionMoto(Request $request)
    {
                $verification = Prospect::where('tel', $request->input('tel'))->first();
                if(!empty($verification)){
                    
                $moto                                 = new Moto();
                $moto->prospect_id                    = $verification->id;
                $moto->typeVehicule                    = $request->input('typeVehicule');
                $moto->cylindreeMoto                  = $request->input('cylindreeMoto');
                $moto->motoConcerner                 = $request->input('motoConcerner');
                $moto->matrimoniale_id          = $request->input('situationMatrimoniale');
                $moto->profession_id                    = $request->input('profession');
                $moto->dateAchatVehicule                     = $request->input('dateAchatVehicule');
                $moto->infraction                     = $request->input('infraction');
                $moto->datePremiereCirculationMois    = $request->input('datePremiereCirculationMois');
                $moto->datePremiereCirculationAnnee   = $request->input('datePremiereCirculationAnnee');
                $moto->codePostalNuit                 = $request->input('codePostalNuit');
                $moto->villeNuit_id                      = $request->input('villeNuit');
                $moto->marqueMoto                     = $request->input('marqueMoto');
                $moto->modelMoto                      = $request->input('modelMoto');
                $moto->nombreAnnee                    = $request->input('nombreAnnee');
                $moto->bonusMalus                     = $request->input('bonusMalus');
                $moto->objetResiliation               = $request->input('objetResiliation');
                $moto->moisEcheance                 = $request->input('moisEcheance');
                $moto->dateEffet                      = $request->input('dateEffet');
                $moto->codePostal                     = $request->input('codePostal');
                $moto->ville_id                          = $request->input('ville');
                $moto->produit_id                   = 5;
                $moto->save();
                
                return redirect('confirmation');
                
                    
                }else{
                $prospect                            = new Prospect();
                $prospect->civilite                  = $request->input('civilite');
                $prospect->nom                       = $request->input('nom');
                $prospect->prenom                    = $request->input('prenom');
                $prospect->email                     = $request->input('email');
                $prospect->tel                       = $request->input('tel');
                $prospect->dateNaissance             = $request->input('dateNaissance');
                $prospect->dejaAssurer              = $request->input('dejaAssurer');
                $prospect->assureurActuel           = $request->input('assureurActuel');
                $prospect->primeContratActuel           = $request->input('primeContratActuel');
                $prospect->save();
                 $moto                                 = new Moto();
                $moto->prospect_id                    = $prospect->id;
                $moto->typeVehicule                    = $request->input('typeVehicule');
                $moto->cylindreeMoto                  = $request->input('cylindreeMoto');
                $moto->motoConcerner                 = $request->input('motoConcerner');
                $moto->matrimoniale_id                = $request->input('situationMatrimoniale');
                $moto->profession_id                     = $request->input('profession');
                $moto->dateAchatVehicule                     = $request->input('dateAchatVehicule');
                $moto->infraction                     = $request->input('infraction');
                $moto->datePremiereCirculationMois    = $request->input('datePremiereCirculationMois');
                $moto->datePremiereCirculationAnnee   = $request->input('datePremiereCirculationAnnee');
                $moto->codePostalNuit                 = $request->input('codePostalNuit');
                $moto->villeNuit_id                      = $request->input('villeNuit');
                $moto->marqueMoto                     = $request->input('marqueMoto');
                $moto->modelMoto                      = $request->input('modelMoto');
                $moto->nombreAnnee                    = $request->input('nombreAnnee');
                $moto->bonusMalus                     = $request->input('bonusMalus');
                $moto->objetResiliation               = $request->input('objetResiliation');
                $moto->moisEcheance                 = $request->input('moisEcheance');
                $moto->dateEffet                      = $request->input('dateEffet');
                $moto->codePostal                     = $request->input('codePostal');
                $moto->ville_id                          = $request->input('ville');
                $moto->produit_id                   = 5;
                $moto->save();
                
                return redirect('confirmation');
                
                
                }
        

               

    }
}
