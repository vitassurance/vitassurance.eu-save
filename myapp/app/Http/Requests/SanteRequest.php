<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SanteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    
        return [

        'nom'           => 'required',
         'prenom'           => 'required',
        'email'         => 'required|email',
         'tel'           => 'required',
          'dateNaissance'           => 'required|date',
           'soins'           => 'required',
            'hospitalisation'           => 'required',
             'dentaire'           => 'required',
              'optique'           => 'required',
               'regime'           => 'required',
               'adresse'           => 'required',
               'profession'           => 'required',
                'dateEffet'           => 'required|date',
                 'codePostal'           => 'required',
                  'ville'           => 'required',
                  'profession'           => 'required',
                  'secteurActivite'           => 'required',


       
            //
        ];
    }
}
