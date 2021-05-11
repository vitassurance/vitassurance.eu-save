<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\MessageRequest;

use App\Parametrage;

use App\Message;

use App\Produit;

class ContactController extends Controller
{
    public function contact() {

    	$contact        = Parametrage::first();
        $parametrage    = Parametrage::first();
        $year           = date("Y");
        $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    	return view('front-end.contact', ['contact' => $contact, 'parametrage' => $parametrage, 'year' => $year, 'produits' => $produits, 'provisoires' => $provisoires]);
    }

     public function insertionMessage(MessageRequest $request)
	{
                
                    
               
                $message                    	    = new Message();
                $message->nom           		    = $request->input('nom');
                $message->email              	    = $request->input('eml');
                $message->objectif             		= $request->input('objectif');
                $message->message                   = $request->input('message');
                $message->save();
               
                $request->session()->flash('alert-success', 'Votre message est bien enregistré');
                return redirect('contact');
                
                
                }
        

               

	
}
