<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Detail;
use App\Parametrage;
use App\Produit;

class ConfirmationController extends Controller
{
    public function index()
	{
	$devis = Detail::where('product', 2)->get();
	$year           = date("Y");
	$parametrage = Parametrage::first();
	 $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
 
    return view('front-end.confirmation', compact('devis', 'year', 'parametrage', 'produits' ,'provisoires'));
    }

    public function apropos()
	{
	$devis = Detail::where('product', 2)->get();
	$year           = date("Y");
	$parametrage = Parametrage::first();
	 $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
 
    return view('front-end.quisommesnous', compact('devis', 'year', 'parametrage', 'produits', 'provisoires'));
    }
}
