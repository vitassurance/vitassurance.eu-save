<?php

namespace App\Http\Controllers;
use App\Prospect;
use App\Sante;
use App\Obseque;
use App\Parametrage;
use App\Message;
use App\Produit;
use App\Habitation;
use App\LeadProvisoire;
use App\Moto;
use Excel;
use \Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;



class DashboardController extends Controller
{
   public function index()
	{
         
	$prospects = Prospect::orderBy('updated_at', 'desc')->paginate(100);
 
    return view('back-end.dashboard', compact('prospects'));
    }

    public function lead()
    {
         
    $leads = LeadProvisoire::all();
 
    return view('back-end.lead', compact('leads'));
    }

     public function message()
	{
    $messages = Message::orderBy('updated_at', 'desc')->get();
 
    return view('back-end.message', compact('messages'));
    }


    public function sante()
	{
        
	$santes = Sante::orderBy('updated_at', 'desc')->paginate(100);
    $year           = date("Y");
 
    return view('back-end.sante', compact('santes', 'year'));
    }

    public function obseque()
	{
        
	$obseques = Obseque::orderBy('updated_at', 'desc')->paginate(100);
 
    return view('back-end.obseque', compact('obseques'));
    }

     public function habitation()
    {
        
    $habitations = Habitation::orderBy('updated_at', 'desc')->paginate(100);
 
    return view('back-end.habitation', compact('habitations'));
    }

    public function auto()
    {
       
    //$santes = Sante::orderBy('updated_at', 'desc')->paginate(100);
    $year           = date("Y");
 
    return view('back-end.auto', compact( 'year'));
    }

    public function moto()
    {
       
    $motos = Moto::orderBy('updated_at', 'desc')->paginate(100);
    $year           = date("Y");
 
    return view('back-end.moto', compact( 'motos', 'year'));
    }

    public function showSante($id)
    {
       
    $sante = Sante::findOrFail($id);
    $sante->visionnage = 1;
    $sante->save();
 
    return view('back-end.show', compact('sante'));
    }
    
    public function showObseque($id)
    {
        
    $obseque = Obseque::findOrFail($id);
    $obseque->visionnage = 1;
    $obseque->save();

 
    return view('back-end.shoow', compact('obseque'));
    }

     public function showHabitation($id)
    {
       
    $habitation = Habitation::findOrFail($id);
    $habitation->visionnage = 1;
    $habitation->save();

 
    return view('back-end.showHabitation', compact('habitation'));
    }

    public function showMoto($id)
    {
       
    $moto = Moto::findOrFail($id);
    $moto->visionnage = 1;
    $moto->save();

 
    return view('back-end.showMoto', compact('moto'));
    }

    public function showProspect($id)
    {
        
    $prospect = Prospect::findOrFail($id);
    return view('back-end.showProspect', compact('prospect'));
    }

    public function exportSante()
    {

        //$users = User::select('id', 'name', 'email', 'created_at')->get();
        $santes = Prospect::join('santes', 'prospect_id', '=', 'prospects.id')
        ->join('villes' ,'villes.id', '=', 'santes.ville_id')
        ->join('regimes' ,'regimes.id', '=', 'santes.regime_id')
        ->select('prospects.nom', 'prospects.prenom', 'prospects.tel', 'prospects.email','soins', 'hospitalisation', 'optique', 'dentaire', 'dateEffet', 'regimes.libelle', 'dateNaissanceConjoint', 'regimeConjoint', 'codePostal', 'villes.ville_nom_reel', 'santes.created_at')->get();
    Excel::create('santes', function($excel) use($santes) {
    $excel->sheet('Sheet 1', function($sheet) use($santes) {
        $sheet->fromArray($santes);
    });
})->export('xls');

    }

    public function exportObseque()
    {

        //$users = User::select('id', 'name', 'email', 'created_at')->get();
        $obseques = Prospect::join('obseques', 'prospect_id', '=', 'prospects.id')
         ->join('villes' ,'villes.id', '=', 'obseques.ville_id')
        ->select('prospects.nom', 'prospects.prenom', 'prospects.tel', 'prospects.email','obseques.interet', 'obseques.dateNaissance', 'obseques.montantCouvert', 'obseques.dateEffet', 'obseques.codePostal', 'obseques.dateNaissanceConjoint', 'obseques.montantCouvertConjoint', 'obseques.codePostal', 'villes.ville_nom_reel', 'obseques.created_at')->get();
    Excel::create('obseques', function($excel) use($obseques) {
    $excel->sheet('Sheet 1', function($sheet) use($obseques) {
        $sheet->fromArray($obseques);
    });
})->export('xls');

    }

    public function exportHabitation()
    {

        //$users = User::select('id', 'name', 'email', 'created_at')->get();
        $habitations = Prospect::join('habitations', 'prospect_id', '=', 'prospects.id')
         ->join('villes' ,'villes.id', '=', 'habitations.ville_id')
        ->select('prospects.nom', 'prospects.prenom', 'prospects.tel', 'prospects.email','habitations.typeLogement', 'habitations.typeResidence', 'habitations.jeCherche', 'habitations.nombrePieceM', 'habitations.nombrePieceP', 'habitations.surfaceHabitable', 'habitations.capitalMobilier', 'habitations.etageAppartement', 'habitations.codePostal', 'villes.ville_nom_reel', 'habitations.created_at')->get();
    Excel::create('habitation', function($excel) use($habitations) {
    $excel->sheet('Sheet 1', function($sheet) use($habitations) {
        $sheet->fromArray($habitations);
    });
})->export('xls');

    }

    public function exportMoto()
    {

        //$users = User::select('id', 'name', 'email', 'created_at')->get();
        $motos = Prospect::join('motos', 'prospect_id', '=', 'prospects.id')
         ->join('villes' ,'villes.id', '=', 'motos.ville_id')
        ->select('prospects.nom', 'prospects.prenom', 'prospects.tel', 'prospects.email','motos.typeVehicule', 'motos.cylindreeMoto', 'motos.motoConcerner', 'motos.marqueMoto', 'motos.modelMoto', 'motos.bonusMalus', 'motos.codePostalNuit', 'motos.codePostal', 'villes.ville_nom_reel', 'motos.created_at')->get();
    Excel::create('moto', function($excel) use($motos) {
    $excel->sheet('Sheet 1', function($sheet) use($motos) {
        $sheet->fromArray($motos);
    });
})->export('xls');

    }

    

   
}
