<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProduitRequest;
use App\Parametrage;
use App\Detail;
use App\Produit;

class ProduitController extends Controller
{
    public function index() {
    	 
    	$produits = Produit::orderBy('provisoire', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    	 $parametrage = Parametrage::first();
	     $details = Detail::where('product', 1)->get();
 
    	return view('back-end.produits.index', compact('details', 'parametrage', 'produits', 'provisoires'));
    }

    public function create() {
    	$provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    	$parametrage = Parametrage::first();
	    $details = Detail::where('product', 1)->get();

    	return view('back-end.produits.create', compact('details', 'parametrage', 'provisoires'));
    }

    public function store(ProduitRequest $request, Produit $produit) {
       
         $produit->titre       = $request->get('titre');
         $produit->description = $request->get('description');
         $produit->lien        = $request->get('lien');
         $produit->icon        = $request->get('icon');
         $produit->provisoire  = 1;

         $produit->save();

         return redirect('produits')->with('status', 'Produit '.$produit->titre.' est bien enregister');

    }

    public function edit($id) {
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    	$produit  = Produit::find($id);
    	$parametrage = Parametrage::first();
	    $details = Detail::where('product', 1)->get();
    	 
    	return view('back-end.produits.edit', compact('details', 'parametrage', 'produit', 'provisoires'));
    }

    public function update(ProduitRequest $request, $id) {
        
         $produit  = Produit::find($id);
         $produit->titre       = $request->get('titre');
         $produit->description = $request->get('description');
         $produit->lien        = $request->get('lien');
         $produit->icon        = $request->get('icon');

         $produit->save();

         return redirect('produits')->with('status', 'Produit '.$produit->titre.' est bien modifier');

    }

    public function status($id) {
       $produit  = Produit::find($id);
       $produit->active = !$produit->active;

       $produit->save();
       return redirect('produits');
    }
}
