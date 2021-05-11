<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Reclamation;

class ReclamationController extends Controller
{
    public function index(){
        $reclamations = Reclamation::all();
        return view('front-end.reclamation', compact('reclamations'));
    }
}
