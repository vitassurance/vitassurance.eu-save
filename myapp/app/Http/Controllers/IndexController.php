<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Parametrage;

use App\Produit;

class IndexController extends Controller
{
    public function index()
	{
        $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $icones = Produit::where('active',1)->where('provisoire', 1)->take(2)->get();
			$year           = date("Y");
 
    return view('front-end.index', compact('year', 'produits', 'icones'));
    }
}
