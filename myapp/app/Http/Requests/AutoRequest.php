<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AutoRequest extends Request
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
        'nom'                           => 'required',
        'prenom'                        => 'required',
        'email'                         => 'required|email',
        'tel'                           => 'required',
        'dateNaissance'                 => 'required|date',
        'dateEffet'                     => 'required|date',
        'codePostal'                    => 'required',
        'ville'                         => 'required',
        'maRecherche'                   => 'required',
        'possedeDepuis'                 => 'required',
        'titulaireCarte'                => 'required',
        'conducteurSecondaire'          => 'required',
        'situationMatrimoniale'         => 'required',
        'profession'                    => 'required',
        'professionExacte'              => 'required',
        'secteurActivite'               => 'required',
        'typePermis'                    => 'required',
        'dateObtention'                 => 'required',
        'infraction'                    => 'required',
        'quandSRA'                      => 'required',
        'dureeSR'                       => 'required',
        'causeAnnulation'               => 'required',
        'dateAchatVehicule'             => 'required|date',
        'datePremiereCirculationMois'   => 'required',
        'datePremiereCirculationAnnee'  => 'required',
        'nombreKiloAn'                  => 'required',
        'modeFinancement'               => 'required',
        'usagePrevu'                    => 'required',
        'typeParking'                   => 'required',
        'codePostalNuit'                => 'required',
        'villeNuit'                     => 'required',
        'codePostalTravail'             => 'required',
        'villeTravail'                  => 'required',
        'marqueAuto'                    => 'required',
        'modelAuto'                     => 'required',
        'nombreAnnee'                   => 'required',
        'bonusMalus'                    => 'required',
        'objetResiliation'              => 'required',
        'assureurActuel'                => 'required',
        'niveauGarantie'                => 'required',
        'nonAssureurDepuis'             => 'required',
        'niveauGarantieSouhaite'        => 'required',
        ];
    }
}
