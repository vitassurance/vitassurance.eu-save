<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Detail;

use App\LeadProvisoire;

use App\Parametrage;

use App\Produit;

use App\Profession;

use App\Ville;

use App\City;

use App\Secteur;

use App\Prospect;

use Excel;

use App\Matrimoniale;
use App\Http\Requests\ProvisoireRequest;

class ProvisoireController extends Controller
{
    public function provisoire($prod)
    {
    	$produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
    	$produit = Produit::where('lien', $prod)->first();
    	$villes      = City::all();
    	$year           = date("Y");
        $professions = Profession::all();
        $matrimoniales      = Matrimoniale::all();
        $secteurs      = Secteur::all();
       


			return view("front-end.provisoire" , compact('produit', 'produits', 'villes', 'year', 'professions', 'matrimoniales', 'secteurs'));
    }

    


    public function insertion(ProvisoireRequest $request)
	{
               $verification = Prospect::where('tel', $request->input('tel'))->first();
                if(!empty($verification)){

                $leadPro                    	    = new LeadProvisoire();
                $leadPro->prospect_id               = $verification->id;
                $leadPro->civilite                  = $request->input('civilite');
                $leadPro->nom           		    = $request->input('nom');
                $leadPro->prenom       		    	= $request->input('prenom');
                $leadPro->adresse       		    = $request->input('Adresse');
                $leadPro->email              	    = $request->input('email');
                $leadPro->emailPro             		= $request->input('emailPro');
                $leadPro->tel             		    = $request->input('tel');
                $leadPro->mobile             		= $request->input('mobile');
                $leadPro->dateNaissance             = $request->input('dateNaissance');
                $leadPro->dateEffet                 = $request->input('dateEffet');
                $leadPro->codePostal           		= $request->input('codePostal');
                $leadPro->ville_id           		= $request->input('ville');
                $leadPro->profession_id             = $request->input('profession');
                $leadPro->matrimoniale_id           = $request->input('situationMatrimoniale');
                $leadPro->secteur_id                = $request->input('secteurActivite');
                $leadPro->produit_id           		= $request->input('idProduit');
                $leadPro->active       		        = 1;
                $leadPro->visionnage       		    = 0;
                $leadPro->montantEmprunter          = $request->input('montantEmprunter');
                $leadPro->taux                      = $request->input('taux');
                $leadPro->duree                     = $request->input('duree');
                $leadPro->revenuProfessionnelActivite = $request->input('revenuProfessionnelActivite');
                $leadPro->capaciteEpargne           = $request->input('capaciteEpargne');
                $leadPro->montantSouhaiteRetraite   = $request->input('montantSouhaiteRetraite');
                $leadPro->horizonProjet             = $request->input('horizonProjet');
                $leadPro->formeExploitation         = $request->input('formeExploitation');
                $leadPro->chiffreAffaire            = $request->input('chiffreAffaire');

                $leadPro->save();
                return redirect('confirmation');

                }else{
                     $prospect                           = new Prospect();
                $prospect->civilite                 = $request->input('civilite');
                $prospect->nom                      = $request->input('nom');
                $prospect->prenom                   = $request->input('prenom');
                $prospect->email                    = $request->input('email');
                $prospect->tel                      = $request->input('tel');
                $prospect->dateNaissance            = $request->input('dateNaissance');
                $prospect->dejaAssurer              = $request->input('dejaAssurer');
                $prospect->assureurActuel           = $request->input('assureurActuel');
                $prospect->primeContratActuel           = $request->input('primeContratActuel');
               // $prospect->projet           = $request->input('projet');
                $prospect->save();
                $leadPro                            = new LeadProvisoire();
                $leadPro->prospect_id               = $prospect->id;
                $leadPro->civilite                  = $request->input('civilite');
                $leadPro->nom                       = $request->input('nom');
                $leadPro->prenom                    = $request->input('prenom');
                $leadPro->adresse                   = $request->input('Adresse');
                $leadPro->email                     = $request->input('email');
                $leadPro->emailPro                  = $request->input('emailPro');
                $leadPro->tel                       = $request->input('tel');
                $leadPro->mobile                    = $request->input('mobile');
                $leadPro->dateNaissance             = $request->input('dateNaissance');
                $leadPro->dateEffet                 = $request->input('dateEffet');
                $leadPro->codePostal                = $request->input('codePostal');
                $leadPro->ville_id                  = $request->input('ville');
                $leadPro->profession_id             = $request->input('profession');
                $leadPro->matrimoniale_id           = $request->input('situationMatrimoniale');
                $leadPro->secteur_id                = $request->input('secteurActivite');
                $leadPro->produit_id                = $request->input('idProduit');
                 $leadPro->active                   = 1;
                 $leadPro->visionnage               = 0;
                 $leadPro->montantEmprunter         = $request->input('montantEmprunter');
                $leadPro->taux         = $request->input('taux');
                $leadPro->duree                     = $request->input('duree');
                $leadPro->revenuProfessionnelActivite = $request->input('revenuProfessionnelActivite');
                $leadPro->capaciteEpargne           = $request->input('capaciteEpargne');
                $leadPro->montantSouhaiteRetraite   = $request->input('montantSouhaiteRetraite');
                $leadPro->horizonProjet             = $request->input('horizonProjet');
                $leadPro->formeExploitation         = $request->input('formeExploitation');
                $leadPro->chiffreAffaire            = $request->input('chiffreAffaire');
                $leadPro->save();
                return redirect('confirmation');

                }
            }

      public function leads($id)
	{
		$produit 	 = Produit::find($id);
		$provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
        $parametrage = Parametrage::first();
	$leads = LeadProvisoire::where('produit_id', $id)->orderBy('updated_at', 'desc')->paginate(100);
 
    return view('back-end.leadP', compact('leads', 'parametrage', 'provisoires', 'produit'));
    }

     public function exportProvisoire($id)
    {

        //$users = User::select('id', 'name', 'email', 'created_at')->get();
        $produit = Produit::find($id);
        $provisoires = leadProvisoire::where('produit_id', $id)
         ->join('produits', 'produits.id', '=', 'leadprovisoires.produit_id')
         ->join('villes' ,'villes.id', '=', 'leadprovisoires.ville_id')
         ->join('professions' ,'professions.id', '=', 'leadprovisoires.profession_id')
        ->select('produits.titre', 'leadprovisoires.prenom', 'leadprovisoires.tel', 'leadprovisoires.email','leadprovisoires.dateEffet', 'leadprovisoires.dateNaissance', 'professions.libelle', 'leadprovisoires.codePostal', 'villes.ville_nom_reel', 'leadprovisoires.created_at')->get();
    Excel::create($produit->titre, function($excel) use($provisoires) {
    $excel->sheet('Sheet 1', function($sheet) use($provisoires) {
        $sheet->fromArray($provisoires);
    });
})->export('xls');

    }

    public function showLead($id)
    {
        $parametrage = Parametrage::first();
    $lead = LeadProvisoire::findOrFail($id);
    $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    $lead = LeadProvisoire::findOrFail($id);
    $lead->visionnage = 1;
    $lead->save();
    return view('back-end.showLead', compact('lead', 'parametrage', 'provisoires'));
    }
}
