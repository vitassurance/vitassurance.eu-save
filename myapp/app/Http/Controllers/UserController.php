<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserModifRequest;

use App\User;
use App\Produit;

use App\Parametrage;

use App\Detail;

class UserController extends Controller
{
    public function index() {
    	 
    	 $users = User::all();
    	 $parametrage = Parametrage::first();
    	 $produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
	     $details = Detail::where('product', 1)->get();
 
    	return view('back-end.users.index', compact('details', 'parametrage', 'users', 'provisoires'));
    }

    public function create() {
    	
    	$parametrage = Parametrage::first();
    	$produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
	    $details = Detail::where('product', 1)->get();

    	return view('back-end.users.create', compact('details', 'parametrage', 'provisoires'));
    }

    public function store(UserRequest $request, User $user) {
       
         $user->name       = $request->get('name');
         $user->email = $request->get('email');
         $user->password        = bcrypt($request->get('password'));
        

         $user->save();

         return redirect('users')->with('status', 'Utilisateur '.$user->titre.' est bien enregister');

    }

    public function edit($id) {
    	$produits = Produit::where('active',1)->where('provisoire', 0)->orderBy('ordre', 'asc')->get();
        $provisoires = Produit::where('active',1)->where('provisoire', 1)->get();
    	$user  = User::find($id);
    	$parametrage = Parametrage::first();
	    $details = Detail::where('product', 1)->get();
    	 
    	return view('back-end.users.edit', compact('details', 'parametrage', 'user', 'provisoires'));
    }

    public function update(UsermodifRequest $request, $id) {
        
         $user  			= User::find($id);
         $user->name       	= $request->get('name');
         $user->email = $request->get('email');
         if($request->has('password')){
         $user->password        = bcrypt($request->get('password'));
        }

         $user->save();

         return redirect('users')->with('status', 'Utilisateur '.$user->titre.' est bien modifier');

    }
    public function activeUser($id) {
       $user  = User::find($id);
       $user->active = !$user->active;

       $user->save();
       return redirect('users');
    }

}

