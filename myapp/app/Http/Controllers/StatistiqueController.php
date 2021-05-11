<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Http\Requests;
use App\Parametrage, App\Message, App\Prospect, App\LeadProvisoire,  Carbon;

class StatistiqueController extends Controller
{
    public function index() {
    	
    	$produits    = Produit::all();
    	$messages    = Message::all();
    	$prospects   = Prospect::all();
         
        $santes      = $produits->find(1)->sante;
        $motos       = $produits->find(5)->moto;
        $habitations = $produits->find(6)->habitation;
        $obseques    = $produits->find(7)->obseque;
        $provisoires = LeadProvisoire::all();


        $leads = $santes->count() + $motos->count() + $habitations->count() + $obseques->count() + $provisoires->count();

        $statLeadsByProduct = [['Santé', $santes->count()], ['Moto', $motos->count()], ['Habitation', $habitations->count()], ['Obséque', $obseques->count()], ['Provisoire', $provisoires->count()]];


    	return view('back-end.statistique', compact('produits', 'messages', 'prospects', 'leads', 'statLeadsByProduct'));

    }



       public function search(Request $request) {

        $dt         = Carbon::create((int)date('Y'), (int)date('m'), (int)date('d'), 23, 59, 59);
        $dateFin    = $dt->toDateString(); 
        $dateDebut  = '';
        
        switch ($request->get('option')) {
           
            case 'option1': {
                $dateDebut = $dt->toDateString();
                break;
            }
            case 'option2': {
                $dateDebut = $dt->subDays(7)->toDateString();
                break;
            }
            case 'option3': {
                $dateDebut = $dt->subMonth()->toDateString();
                break;
            }
            case 'option4': {
                $dateDebut = $dt->subYear()->toDateString();
                break;
            }
            
        }
        
        $produits    = Produit::all();
        $messages    = Message::whereBetween('created_at', [$dateDebut, $dateFin])->get();
        $prospects   = Prospect::whereBetween('created_at', [$dateDebut, $dateFin])->get();
         
        $santes      = $produits->find(1)->sante()->whereBetween('created_at', [$dateDebut, $dateFin])->get();
        $motos       = $produits->find(5)->moto()->whereBetween('created_at', [$dateDebut, $dateFin])->get();
        $habitations = $produits->find(6)->habitation()->whereBetween('created_at', [$dateDebut, $dateFin])->get();
        $obseques    = $produits->find(7)->obseque()->whereBetween('created_at', [$dateDebut, $dateFin])->get();
        //$provisoires = LeadProvisoire::whereBetween('created_at', [$dateDebut, $dateFin])->get();

        $leads = $santes->count() + $motos->count() + $habitations->count() + $obseques->count() ;

        $statLeadsByProduct = ['sante'=> $santes->count(), 'moto' => $motos->count(), 'habitation' => $habitations->count(), 'obseque' => $obseques->count() ];


        return ['produits' => $produits->count(), 'messages' => $messages->count(), 'prospects' => $prospects->count(), 'leads' => $leads, 'statLeadsByProduct' => json_encode($statLeadsByProduct)];

    }                            



}
