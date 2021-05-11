@extends('template.front')

@section('stylesheets')
{{ Html::style('back-end/libs/bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>
.panel-body {
	padding-top:0px;
	padding-bottom: 0px;
}
  .breadcrumb {
	color:#49464b;
	padding-top: 5px;
}

.infos {
	background-color: #f5f5f5;
    
    padding: 20px;
}
.on {
    display: block;
}
 
.off {
    display: none;
}


.uk-margin-bottom {
    margin-bottom: 5px;
    border: 1px solid rgba(0, 171, 219, 0.42);
}
.arrondie {
-moz-border-radius:10px;
-webkit-border-radius:10px;
border-radius:10px;
box-shadow: 10px 10px 5px #888888;
}
</style>

{{ Html::style('front-end/css/rating-min.css') }}

@endSection

@section('content')
{!! Form::open([
    'action' => 'HabitationController@insertionHabitation','files' => true, 'id' => 'form', 'data-validate' => 'parsley'
]) !!}
<br>
<div class="container">
  <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
                <li><a href="#">devis assurance</a></li>
                <li class="active"> Assurance Habitation</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> Besoin d'une assurance habitation au meilleur tarif ?</h3>
                 </div>
              <div class="panel-body" style="background-color: #c0c0c0;">
                <div class="row">
                            <div class="col-md-2">
                                <img class="vignette" alt="comparateur mutuelle" src="http://medias.lecomparateurassurance.com/image-assurance/mutuelle-acs.jpg">
                            </div>
                           <div class="col-md-10">
                            @foreach($details as $detail)
                                <div class="bullet-1"><div class="icon-coche"></div>{{$detail->description}}</div>
                               @endforeach
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
        </div>
    </div>
<div id="rootwizard">
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
	<ul class="nav nav-justified">
	  	<li><a href="#tab1" data-toggle="tab">Votre projet</a></li>
		<li><a href="#tab2" data-toggle="tab">Votre logement</a></li>
		<li><a href="#tab3" data-toggle="tab">Votre profil</a></li>
		
		
	</ul>
	 </div>
	  </div>
	</div>
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
	      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 1. JE DÉCRIS MON BESOIN D'ASSURANCE OBSÉQUES</h3>
                 </div>
              <div class="panel-body" style="background-color: #f5f5f5;">
                <div class="row">
                <div class="col-md-6 infos">
                 <fieldset>

                  <div class="form-group">
                             <div class="col-lg-12" align="left">
                                <label class="control-label">Type de logement à assurer :</label>
                                </div>
                                <div class="col-lg-12">
                                    <select class="form-control uk-margin-bottom" name="typeLogement" id="typeLogement" >
                                     <option selected="selected" value="">Sélectionner</option>
                                        <option  value="Appartement">Appartement</option>
                                        <option value="Maison">Maison</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                             <div class="col-lg-12" align="left">
                                <label class="control-label">Je suis (ou serai) :</label>
                                </div>
                                <div class="col-lg-12">
                                	<select class="form-control uk-margin-bottom" name="etat" id="etat" >
                                    <option selected="selected" value="">Sélectionner</option>
                                		<option  value="Locataire">Locataire</option>
                                		<option value="Propriétaire occupant">Propriétaire occupant</option>
                                		<option value="Propriétaire non occupant">Propriétaire non occupant</option>
                                	</select>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-lg-12" align="left">
                                <label class="control-label ">Il s'agit d'une</label>
                                </div>
                                <div class="col-lg-12">
                                	<select class="form-control uk-margin-bottom" name="typeResidence" id="typeResidence" >
                                        <option selected="selected" value="">Sélectionner</option>
                                		<option  value="Résidence principale">Résidence principale</option>
                                		<option value="Résidence secondaire">Résidence secondaire</option>

                                	</select>
                                </div>
                                <div class="col-lg-12 off form-group" id="ach">
                                	<select class="form-control uk-margin-bottom" name="acheter" id="acheter" >
                                        <option selected="selected" value="">Sélectionner</option>
                                		<option value="1">Achetée il y a moins d'un an</option>
                                		<option  value="2">Achetée il y a plus d'un an</option>
                                		
                                	</select>
                                </div>
                            </div>
                            
                    <div class="form-group">
                    <div class="col-lg-5" align="left">
                                <label class="control-label ">J'habite déjà ce logement</label>
                                </div>
                               
                                <div class="col-lg-7">
                                    <div class="radio-inline">
                                        <label class="radio" for="oui">OUI<input type="radio" name="jhabite" data-validation="RadioValidateur" id="Résidence secondaire" value="oui" ></label>
                                        </div>
                                        <div class="radio-inline">
                                        <label class="radio" for="non">NON<input type="radio" name="jhabite" data-validation="RadioValidateur" id="jhabite" value="non" ></label>
                                        </div>
                                </div>
                            </div>
                            <fieldset>

                    </div>
                    <div class="col-md-6 infos">
                    <fieldset>
                <div class="form-group">
                <div class="col-lg-6" align="right">
                                <label class="control-label " >Mon contrat doit commencer le</label>
                                </div>
                                <div class="col-lg-6" id='datetimepicker1'>
                   <input name="dateEffet" type='text' class="form-control uk-margin-bottom datepicker" id="dateEffet" placeholder="Date debut contrat" value="{{ old('dateEffet') }}" />
                                 <span class="off help-block" id="de">
                                        <strong>Merci d'indiquer la date d'effet de votre contrat</strong>
                                    </span>

                                </div>
                            </div>
                             <div class="form-group">
                             <div class="col-lg-6" align="right">
                 <label class="control-label ">Code postal</label>
                 </div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control uk-margin-bottom" name="codePostal" id="codePostal" value="" >
                                    <span class="off help-block" id="cp">
                                        <strong>Merci d'indiquer le code postal de votre habitation</strong>
                                    </span>
                                </div>
                </div>
                                
                                 <div class="form-group">
                                 <div class="col-lg-6" align="right">
                                <label class="control-label ">Ville</label>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-control uk-margin-bottom" name="ville" id="ville" >
                                       <option value=""></option>
                                    @foreach($villes as $ville)
                                         <option value="{{$ville->ville_id}}">{{$ville->ville}}</option>
                                        @endforeach
                                       
                                   </select>

                               </div>
                                
                           </div>

                           
                    <div class="form-group">
                               <div class="col-lg-5" align="right">
                                <label class="control-label ">Je recherche une assurance</label>
                                </div>
                                <div class="col-lg-7">
                                    
                                        <label class="radio" for="jeCherche">Avec agence près de chez moi<input type="radio" name="jeCherche" data-validation="RadioValidateur" id="jeCherche" value="Avec agence près de chez moi" ></label>
                                        
                                        <label class="radio" for="jeCherche">Une relation téléphone/web suffit<input type="radio" name="jeCherche" data-validation="RadioValidateur" id="jeCherche" value="Une relation téléphone/web suffit" ></label>
                                </div>
                            </div>
                            </fieldset>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

	    </div>
	    <div class="tab-pane" id="tab2">
	      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 2. Je décris mon logement</h3>
                 </div>
              <div class="panel-body" style="background-color: #f5f5f5;">
                <div class="row">
                <div class="col-md-6 infos">
                <fieldset>
                 
                     
                    <div class="form-group">
                                <div class="col-md-6" align="right">
                                <label class="control-label " >Nombre de pièces de 40m² ou moins</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control uk-margin-bottom" name="nombrePieceM" id="nombrePieceM" data-validation="SelectValidateur" >
                                        <option selected="selected" value="">Sélectionner</option>
                                		<option  value="1">1</option>
                                		<option value="2">2</option>
                                		<option value="3">3</option>
                                		<option value="4">4</option>
                                		<option value="5">5</option>
                                		<option value="6">6</option>
                                		<option value="7">7</option>
                                		<option value="8">8</option>
                                		<option value="9">9</option>
                                		<option value="10">10 ou plus</option>
                                	</select>
                                </div>
                            </div>

                           
                    <div class="form-group">
                               <div class="col-md-6" align="right">
                                <label class="control-label " >Nombre de pièces de plus de 40m²</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control uk-margin-bottom" name="nombrePieceP" id="nombrePieceP" data-validation="SelectValidateur" >
                                		<option selected="1" value="1">1</option>
                                		<option value="2">2</option>
                                		<option value="3">3</option>
                                		<option value="4">4</option>
                                		<option value="5">5</option>
                                		<option value="6">6</option>
                                		<option value="7">7</option>
                                		<option value="8">8</option>
                                		<option value="9">9</option>
                                		<option value="10">10 ou plus</option>
                                	</select>
                                </div>
                            </div>
                            
                    <div class="form-group">
                               <div class="col-md-6" align="right">
                                <label class="control-label " >Surface totale habitable en m²</label>
                                </div>
                                <div class="col-md-6">
                                   <input type="text" class="form-control uk-margin-bottom" name="surfaceHabitable" id="surfaceHabitable" value="" >
                                </div>
                            </div>

                               
                    <div class="form-group">
                               <div class="col-lg-12" align="left">
                                <label class="control-label " >Parmi cette liste, quels éléments équipent mon logement ?</label>
                                </div>
                                <div class="col-lg-12">
                                   
                                        <label class="radio" for="veranda">Véranda<input type="checkbox" name="veranda" data-validation="RadioValidateur" id="veranda" value="Véranda" ></label>
                                        <label class="radio" for="annexe">Annexes ou dépendances<input type="checkbox" name="annexe" data-validation="RadioValidateur" id="annexe" value="Annexes ou dépendances" ></label>
                                        <label class="radio" for="piscine">Piscine<input type="checkbox" name="piscine" data-validation="RadioValidateur" id="piscine" value="Piscine" ></label>
                                        <label class="radio" for="exterieure">Installations extérieures<input type="checkbox" name="exterieure" data-validation="RadioValidateur" id="exterieure" value="Installations extérieures" ></label>
                                        <label class="radio" for="durable">Installations développement durable<input type="checkbox" name="durable" data-validation="RadioValidateur" id="durable" value="Installations développement durable" ></label>
                                        

                                </div>
                            </div>

                            
                    <div class="off form-group" id="surfaceV">
                               
                               <div class="col-md-6" align="right">
                                <label class="control-label " >Surface de la véranda</label>
                                </div>
                                <div class="col-md-6">
                                   <input type="text" class="form-control uk-margin-bottom" name="surfaceVeranda" id="surfaceVeranda" value="" >
                                </div>
                            </div>

                            
                    <div class="off form-group" id="surfaceA">
                                
                                <div class="col-md-6" align="right">
                                <label class="control-label " >Surface des annexes ou dépendances en m²</label>
                                </div>
                                <div class="col-md-6">
                                   <input type="text" class="form-control uk-margin-bottom" name="surfaceAnnexe" id="surfaceAnnexe" value="" >
                                </div>
                            </div>

                            
                    <div class="form-group">
                    <div class="col-md-6" align="right">
                                <label class="control-label " >Étage de l'appartement</label>
                                </div>
                               
                                <div class="col-md-6">
                                	<select class="form-control uk-margin-bottom" name="etageAppartement" id="etageAppartement" >
                                		<option selected="selected" value="">Sélectionner</option>
                                		<option value="1">Rez-de-chaussée</option>
                                		<option value="2">Dernier étage</option>
                                		<option value="3">Autre étage</option>
                                	</select>
                                </div>
                            </div>
                            
                    <div class="form-group">
                    <div class="col-md-6" align="right">
                                <label class="control-label " >Combien de jours/an mon logement est-il inhabité ?</label>
                                </div>
                               
                                <div class="col-md-6">
                                	<select class="form-control uk-margin-bottom" name="joursInhabite" id="joursInhabite" >
                                        <option selected="selected" value="">Sélectionner</option>
                                		<option value="Moins de 45 jours">Moins de 45 jours</option>
                                		<option value="Entre 45 et 60 jours">Entre 45 et 60 jours</option>
                                		<option value="Entre 60 et 90 jours">Entre 60 et 90 jours</option>
                                		<option value="Plus de 90 jours">Plus de 90 jours</option>
                                	</select>
                                </div>
                            </div>

                            
                    <div class="form-group">
                    <div class="col-md-7" align="right">
                                <label class="control-label " >Ce logement est</label>
                                </div>
                               
                                <div class="col-md-5">
                                   <div class="radio-inline">
                                        <label class="radio" for="logementVide">VIDE<input type="radio" name="logementEst" data-validation="RadioValidateur" id="logementVide" value="VIDE" ></label>
                                        </div>
                                        <div class="radio-inline">
                                        <label class="radio" for="logementMeuble">MEUBLE<input type="radio" name="logementEst" data-validation="RadioValidateur" id="logementMeuble" value="MEUBLE" ></label>
                                        </div>
                                        

                                </div>
                            </div>
                            
                    <div class="form-group">
                    <div class="col-md-6" align="right">
                                <label class="control-label " >Capital mobilier à assurer</label>
                                </div>
                               
                                <div class="col-md-6">
                                	<select class="form-control uk-margin-bottom" name="capitalMobilier" id="capitalMobilier" >
                                		<option selected="selected" value="">Sélectionner</option>
                                		<option value="5000">5 000€</option>
                                		<option value="10000">10 000€</option>
                                		<option value="15000">15 000€</option>
                                		<option value="20000">20 000€</option>
                                		<option value="25000">25 000€</option>
                                		<option value="30000">30 000€</option>
                                		<option value="35000">35 000€</option>
                                		<option value="40000">40 000€</option>
                                		<option value="45000">45 000€</option>
                                		<option value="50000">50 000€</option>
                                		<option value="55000">55 000€</option>
                                		<option value="60000">60 000€</option>
                                		<option value="65000">65 000€</option>
                                		<option value="70000">70 000€</option>
                                		<option value="75000">75 000€</option>
                                		<option value="80000">80 000€</option>
                                		<option value="85000">85 000€</option>
                                		<option value="90000">90 000€</option>
                                		<option value="95000">95 000€</option>
                                		<option value="100000">100 000€</option>
                                		<option value="105000">105 000€</option>
                                		<option value="110000">110 000€</option>
                                		<option value="115000">115 000€</option>
                                		<option value="120000">120 000€</option>
                                		<option value="125000">125 000€</option>
                                		<option value="130000">130 000€</option>
                                		<option value="135000">135 000€</option>
                                		<option value="140000">140 000€</option>
                                		<option value="145000">145 000€</option>
                                		<option value="150000">150 000€ ou plus</option>
                                	</select>
                                </div>
                            </div>
                           
                          
</fieldset>
                    </div>
                    <div class="col-md-6 infos">
                    <fieldset>
               <div class="form-group" >
               <div class="col-md-6" align="right">
                                <label class="control-label " >Nombre de sinistres déclarés :</label>
                                </div>
                                <div class="col-md-6">
                                   <select class="form-control uk-margin-bottom" name="nombreSinistre" id="nombreSinistre" >
                                     <option selected="selected" value="0">0</option>
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5 ou plus</option>
                                 </select>

                                </div>
                            </div>
                            <div class="off form-group" id="premierSinistre">
                            <div class="col-lg-4" align="right">
                  <label class="control-label">Type du 1er sinistre</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="premierS" id="premierS" >
                    <option selected="selected" value="">Sélectionner</option>
                    <option value="1">Matériel non responsable</option>
                    <option value="2">Matériel 50% responsable</option>
                    <option value="3">Matériel 100% responsable</option>
                    <option value="4">Bris de glace</option>
                    <option value="5">En stationnement</option>
                    <option value="6">Vol</option>
                    <option value="7">Incendie</option>
                    <option value="8">Vandalisme</option>
                    <option value="9">Evénement naturel</option>
                    <option value="10">Corporel 100% responsable</option>
                    <option value="11">Corporel 50% responsable</option>
                    <option value="12">Corporel non responsable</option>
                    <option value="13">Catastrophe naturelle</option>
                    <option value="14">Attentat</option>
                    </select>
                  </div>
              </div>
               <div class="off form-group" id="premierSinistreDate">
               <div class="col-lg-5" align="right">
                                <label class="control-label ">Date</label>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreMois1" id="dateSinistreMois1" >
                                       <option selected="selected" value="-1">Mois</option>
                                       
                                       <option value="01">Janvier</option>
                                       
                                       <option value="02">Février</option>
                                       
                                       <option value="03">Mars</option>
                                       
                                       <option value="04">Avril</option>
                                       
                                       <option value="05">Mai</option>
                                       
                                       <option value="06">Juin</option>
                                       
                                       <option value="07">Juillet</option>
                                       
                                       <option value="08">Août</option>
                                       
                                       <option value="09">Septembre</option>
                                       
                                       <option value="10">Octobre</option>
                                       
                                       <option value="11">Novembre</option>
                                       
                                       <option value="12">Décembre</option>
                                   </select>

                               </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreAnnee1" id="dateSinistreAnnee1" >
                                       <option selected="selected" value="-1">Année</option>
                                       
                                       <option value="2016">2016</option>
                                       
                                       <option value="2015">2015</option>
                                       
                                       <option value="2014">2014</option>
                                       
                                       <option value="2013">2013</option>
                                       
                                       <option value="2012">2012</option>
                                       
                                       <option value="2011">2011</option>
                                       
                                       <option value="2010">2010</option>
                                       
                                       <option value="2009">2009</option>
                                       
                                       <option value="2008">2008</option>
                                       
                                       <option value="2007">2007</option>
                                       
                                       <option value="2006">2006</option>
                                       
                                       <option value="2005">2005</option>
                                   </select>
                               </div>
                           </div>


                            <div class="off form-group" id="deuxiemeSinistre">
                  <label class="control-label col-lg-4">Type du 2eme sinistre</label>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="deuxiemeS" id="deuxiemeS" >
                    <option selected="selected" value="">Sélectionner</option>
                    <option value="1">Matériel non responsable</option>
                    <option value="2">Matériel 50% responsable</option>
                    <option value="3">Matériel 100% responsable</option>
                    <option value="4">Bris de glace</option>
                    <option value="5">En stationnement</option>
                    <option value="6">Vol</option>
                    <option value="7">Incendie</option>
                    <option value="8">Vandalisme</option>
                    <option value="9">Evénement naturel</option>
                    <option value="10">Corporel 100% responsable</option>
                    <option value="11">Corporel 50% responsable</option>
                    <option value="12">Corporel non responsable</option>
                    <option value="13">Catastrophe naturelle</option>
                    <option value="14">Attentat</option>
                    </select>
                  </div>
              </div>
               <div class="off form-group" id="deuxiemeSinistreDate">
               <div class="col-lg-5" align="right">
                                <label class="control-label ">Date</label>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreMois1" id="dateSinistreMois1" >
                                       <option selected="selected" value="-1">Mois</option>
                                       
                                       <option value="01">Janvier</option>
                                       
                                       <option value="02">Février</option>
                                       
                                       <option value="03">Mars</option>
                                       
                                       <option value="04">Avril</option>
                                       
                                       <option value="05">Mai</option>
                                       
                                       <option value="06">Juin</option>
                                       
                                       <option value="07">Juillet</option>
                                       
                                       <option value="08">Août</option>
                                       
                                       <option value="09">Septembre</option>
                                       
                                       <option value="10">Octobre</option>
                                       
                                       <option value="11">Novembre</option>
                                       
                                       <option value="12">Décembre</option>
                                   </select>

                               </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreAnnee1" id="dateSinistreAnnee1" >
                                       <option selected="selected" value="-1">Année</option>
                                       
                                       <option value="2016">2016</option>
                                       
                                       <option value="2015">2015</option>
                                       
                                       <option value="2014">2014</option>
                                       
                                       <option value="2013">2013</option>
                                       
                                       <option value="2012">2012</option>
                                       
                                       <option value="2011">2011</option>
                                       
                                       <option value="2010">2010</option>
                                       
                                       <option value="2009">2009</option>
                                       
                                       <option value="2008">2008</option>
                                       
                                       <option value="2007">2007</option>
                                       
                                       <option value="2006">2006</option>
                                       
                                       <option value="2005">2005</option>
                                   </select>
                               </div>
                           </div>

                           <div class="off form-group" id="troisiemeSinistre">
                  <label class="control-label col-lg-4">Type du 3eme sinistre</label>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="troisiemeS" id="troisiemeS" >
                    <option selected="selected" value="">Sélectionner</option>
                    <option value="1">Matériel non responsable</option>
                    <option value="2">Matériel 50% responsable</option>
                    <option value="3">Matériel 100% responsable</option>
                    <option value="4">Bris de glace</option>
                    <option value="5">En stationnement</option>
                    <option value="6">Vol</option>
                    <option value="7">Incendie</option>
                    <option value="8">Vandalisme</option>
                    <option value="9">Evénement naturel</option>
                    <option value="10">Corporel 100% responsable</option>
                    <option value="11">Corporel 50% responsable</option>
                    <option value="12">Corporel non responsable</option>
                    <option value="13">Catastrophe naturelle</option>
                    <option value="14">Attentat</option>
                    </select>
                  </div>
              </div>
               <div class="off form-group" id="troisiemeSinistreDate">
               <div class="col-lg-5" align="right">
                                <label class="control-label ">Date</label>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreMois1" id="dateSinistreMois1" >
                                       <option selected="selected" value="-1">Mois</option>
                                       
                                       <option value="01">Janvier</option>
                                       
                                       <option value="02">Février</option>
                                       
                                       <option value="03">Mars</option>
                                       
                                       <option value="04">Avril</option>
                                       
                                       <option value="05">Mai</option>
                                       
                                       <option value="06">Juin</option>
                                       
                                       <option value="07">Juillet</option>
                                       
                                       <option value="08">Août</option>
                                       
                                       <option value="09">Septembre</option>
                                       
                                       <option value="10">Octobre</option>
                                       
                                       <option value="11">Novembre</option>
                                       
                                       <option value="12">Décembre</option>
                                   </select>

                               </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreAnnee1" id="dateSinistreAnnee1" >
                                       <option selected="selected" value="-1">Année</option>
                                       
                                       <option value="2016">2016</option>
                                       
                                       <option value="2015">2015</option>
                                       
                                       <option value="2014">2014</option>
                                       
                                       <option value="2013">2013</option>
                                       
                                       <option value="2012">2012</option>
                                       
                                       <option value="2011">2011</option>
                                       
                                       <option value="2010">2010</option>
                                       
                                       <option value="2009">2009</option>
                                       
                                       <option value="2008">2008</option>
                                       
                                       <option value="2007">2007</option>
                                       
                                       <option value="2006">2006</option>
                                       
                                       <option value="2005">2005</option>
                                   </select>
                               </div>
                           </div>

                           <div class="off form-group" id="quatriemeSinistre">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Type du 4eme sinistre</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="quatriemeS" id="quatriemeS" >
                    <option selected="selected" value="">Sélectionner</option>
                    <option value="1">Matériel non responsable</option>
                    <option value="2">Matériel 50% responsable</option>
                    <option value="3">Matériel 100% responsable</option>
                    <option value="4">Bris de glace</option>
                    <option value="5">En stationnement</option>
                    <option value="6">Vol</option>
                    <option value="7">Incendie</option>
                    <option value="8">Vandalisme</option>
                    <option value="9">Evénement naturel</option>
                    <option value="10">Corporel 100% responsable</option>
                    <option value="11">Corporel 50% responsable</option>
                    <option value="12">Corporel non responsable</option>
                    <option value="13">Catastrophe naturelle</option>
                    <option value="14">Attentat</option>
                    </select>
                  </div>
              </div>
               <div class="off form-group" id="quatriemeSinistreDate">
               <div class="col-lg-5" align="right">
                                <label class="control-label ">Date</label>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreMois1" id="dateSinistreMois1" >
                                       <option selected="selected" value="-1">Mois</option>
                                       
                                       <option value="01">Janvier</option>
                                       
                                       <option value="02">Février</option>
                                       
                                       <option value="03">Mars</option>
                                       
                                       <option value="04">Avril</option>
                                       
                                       <option value="05">Mai</option>
                                       
                                       <option value="06">Juin</option>
                                       
                                       <option value="07">Juillet</option>
                                       
                                       <option value="08">Août</option>
                                       
                                       <option value="09">Septembre</option>
                                       
                                       <option value="10">Octobre</option>
                                       
                                       <option value="11">Novembre</option>
                                       
                                       <option value="12">Décembre</option>
                                   </select>

                               </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateSinistreAnnee1" id="dateSinistreAnnee1" >
                                       <option selected="selected" value="-1">Année</option>
                                       
                                       <option value="2016">2016</option>
                                       
                                       <option value="2015">2015</option>
                                       
                                       <option value="2014">2014</option>
                                       
                                       <option value="2013">2013</option>
                                       
                                       <option value="2012">2012</option>
                                       
                                       <option value="2011">2011</option>
                                       
                                       <option value="2010">2010</option>
                                       
                                       <option value="2009">2009</option>
                                       
                                       <option value="2008">2008</option>
                                       
                                       <option value="2007">2007</option>
                                       
                                       <option value="2006">2006</option>
                                       
                                       <option value="2005">2005</option>
                                   </select>
                               </div>
                           </div>
                             

                           
                    <div class="form-group">
                    <div class="col-md-6" align="right">
                                <label class="control-label ">Mon logement dispose de moyens de protection</label>
                                </div>
                               
                                <div class="col-md-6">
                                        <div class="radio-inline">
                                        <label class="radio" for="logementProtection">OUI<input type="radio" name="protectionMoyen"  id="logementProtection" value="3" ></label>
                                        </div>
                                        <div class="radio-inline">
                                        <label class="radio" for="logementProtectionNon">NON<input type="radio" name="protectionMoyen" id="logementProtectionNon" value="3" ></label>
                                        </div>
                                </div>
                            </div>
                            <div class="off form-group" id="protection">
                               
                                <div class="col-lg-12">
                                   
                                        <label class="radio" for="alarmeProtection">Alarme<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="alarmeProtection" value="Alarme" ></label>
                                        
                                        <label class="radio" for="detecteurProtection">Détecteur de fumée<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="detecteurProtection" value="Détecteur de fumée" ></label>
                                        
                                        <label class="radio" for="porteProtection">Porte blindée<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="porteProtection" value="Porte blindée" ></label>
                                        
                                        <label class="radio" for="serrureProtection">Serrure 3 points<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="serrureProtection" value="Serrure 3 points" ></label>
                                        
                                        <label class="radio" for="videoProtection">Vidéosurveillance<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="videoProtection" value="Vidéosurveillance" ></label>
                                        
                                        <label class="radio" for="teleProtection">Télésurveillance<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="teleProtection" value="Télésurveillance" ></label>
                                        
                                        <label class="radio" for="autreProtection">Autres<input type="checkbox" name="choixProtection" data-validation="RadioValidateur" id="autreProtection" value="Autres" ></label>
                                        

                                </div>
                            </div>
                             <div class="form-group" >
                             <div class="col-md-6" align="right">
                                <label class="control-label " >Mon dernier assureur habitation</label>
                                </div>
                                <div class="col-md-6">
                                	<select class="form-control uk-margin-bottom" name="dernierAssureur" id="dernierAssureur" >
                                		<option selected="selected" value="">Je n'ai jamais été assuré</option>
                                		<option value="4Assur">4Assur</option>
                                		<option value="ACommeAssure">ACommeAssure</option>
                                		<option value="Active Assurances">Active Assurances</option>
                                		<option value="Allianz AGF">Allianz AGF</option>
                                		<option value="AllSecur">AllSecur</option>
                                		<option value="Aloa Assurances">Aloa Assurances</option>
                                		<option value="51">Amaguiz</option>
                                		<option value="4">AMF Assurances</option>
                                		<option value="52">AMV</option>
                                		<option value="5">April</option>
                                		<option value="6">Aréas</option>
                                		<option value="8">ASSU 2000</option>
                                		<option value="53">AssurAvenue</option>
                                		<option value="80">Assurbike</option>
                                		<option value="54">AssurOnline</option>
                                		<option value="55">AssurPeople</option>
                                		<option value="56">Auchan Assurances</option>
                                		<option value="57">Autofirst</option>
                                		<option value="9">Aviva Assurances</option>
                                		<option value="10">AXA</option>
                                		<option value="58">Banque populaire</option>
                                		<option value="59">Banque postale</option>
                                		<option value="12">BNP PARIBAS</option>
                                		<option value="60">Bonus50</option>
                                		<option value="61">Caisse d'épargne</option>
                                		<option value="14">Carrefour Assurances</option>
                                		<option value="15">CIC</option>
                                		<option value="79">Club 14</option>
                                		<option value="62">Covéa Risks</option>
                                		<option value="63">Crédit Agricole</option>
                                		<option value="7">Crédit mutuel</option>
                                		<option value="16">Direct Assurance</option>
                                		<option value="64">ECA Assurances</option>
                                		<option value="18">Euro Assurance</option>
                                		<option value="19">Eurofil</option>
                                		<option value="81">FMA</option>
                                		<option value="20">GAN</option>
                                		<option value="22">Generali</option>
                                		<option value="23">GMF</option>
                                		<option value="24">Gras Savoye</option>
                                		<option value="25">Groupama</option>
                                		<option value="65">IdMacif</option>
                                		<option value="66">L'olivier - assurance auto</option>
                                		<option value="77">La Parisienne</option>
                                		<option value="26">LCL</option>
                                		<option value="27">MAAF</option>
                                		<option value="28">MACIF</option>
                                		<option value="29">MACSF</option>
                                		<option value="30">MAIF</option>
                                		<option value="67">MAPA Assurances</option>
                                		<option value="31">Matmut</option>
                                		<option value="68">MaXance</option>
                                		<option value="33">MMA</option>
                                		<option value="34">Mutuelle de Poitiers</option>
                                		<option value="35">Mutuelle des motards</option>
                                		<option value="36">Natixis</option>
                                		<option value="38">NEXX Assurances</option>
                                		<option value="39">Novéa Assurances</option>
                                		<option value="40">Pacifica Crédit Agricole</option>
                                		<option value="69">Permis9</option>
                                		<option value="78">RVA</option>
                                		<option value="41">SMABTP</option>
                                		<option value="70">SMENO Assurance</option>
                                		<option value="71">Société Générale</option>
                                		<option value="72">Solly Azar</option>
                                		<option value="73">SOS Malus</option>
                                		<option value="42">Suravenir Crédit Mutuel</option>
                                		<option value="43">Swisslife</option>
                                		<option value="44">Thélem</option>
                                		<option value="82">Xenassur</option>
                                		<option value="45">Autre compagnie</option>
                                		<option value="75">Autre Courtier</option>
                                		<option value="74">Autre Mutuelle</option>
                                		<option value="76">Autre Assureur en ligne</option>
                                		<option value="46">Je ne sais pas</option>
                                	</select>

                                </div>
                            </div>


                    <div class="form-group">
                    
                    <div class="col-lg-7" align="right">
                                <label class="control-label ">Je suis chez mon assureur depuis plus d'un an</label>
                                </div>
                               <input type="text" hidden value="" id="dejaAssurer" name="dejaAssurer">
                                <div class="col-lg-5">
                                    <div class="radio-inline">
                                        <label class="radio" for="1018_3">OUI<input type="radio" name="dejaAssurer1" data-validation="RadioValidateur" id="plusAn" value="3" ></label>
                                        </div>
                                        <div class="radio-inline">
                                        <label class="radio" for="1018_3">NON<input type="radio" name="dejaAssurer1" data-validation="RadioValidateur" id="moinsAn" value="3" ></label>
                                        </div>
                                </div>
                            </div>
                            <div class="off form-group" id="actuel">
                                <label class="control-label col-lg-4" >Mon contrat actuel a commencé le</label>
                                <div class="col-lg-8" id='datetimepicker1'>
                   <input name="monContratActuel" type='text' class="form-control uk-margin-bottom datepicker" id="monContratActuel" placeholder="Date debut contrat" value="{{ old('monContratActuel') }}" />

                                </div>
                            </div>
                             <div class="off form-group" id="PrimeContratActuelId">
                                
                                <div class="col-md-5" align="right">
                                <label class="control-label " >Prime de contrat actuel : </label>
                                </div>
                                <div class="col-md-7">
                                   <input type="text" class="form-control uk-margin-bottom" name="primeContratActuel" id="primeContratActuel" value="" >
                                </div>
                            </div>
                            </fieldset>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
	    </div>
		<div class="tab-pane" id="tab3">
			<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 2. JE DÉCRIS MON PROFIL</h3>
			     </div>
			  <div class="panel-body" style="background-color: #f5f5f5;">
			     <form class="form-horizontal">
			      <div class="row">
			      	<div class="col-md-6 infos">
			      		
						  <fieldset>
						    
						    <div class="form-group ">
                            <div class="col-lg-5" align="right">
							    <label class="col-lg-2 control-label"> Civilité</label>
                                </div>
							    <div class="col-lg-7">

							    	<div class="radio-inline">
							    		
							    		<label class="radio" for="1018_3">M.<input type="radio" name="civilite" data-validation="RadioValidateur" id="1018_3" value="M" data-erreur-msg="Merci d'indiquer votre civilité"></label>
							    	</div>

							    	<div class="radio-inline">
							    		
							    		<label class="radio" for="1018_2">Mme<input type="radio" name="civilite" data-validation="RadioValidateur" id="1018_2" value="Mme" data-erreur-msg="Merci d'indiquer votre civilité"></label>
							    	</div>

							    	<div class="radio-inline">
							    		
							    		<label class="radio" for="1018_1">Mlle<input type="radio" name="civilite" data-validation="RadioValidateur" id="1018_1" value="Mlle" data-erreur-msg="Merci d'indiquer votre civilité"></label>
							    	</div>

							    </div>
							</div>

						    <div class="form-group">
                            <div class="col-lg-5" align="right">
							    <label class="control-label ">Nom</label>
                                </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom" id="nom" name="nom" value="" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
									@if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
							    </div>
							</div>

						   <div class="form-group">
                           <div class="col-lg-5" align="right">
							    <label class="control-label ">Prénom</label>
                                </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom" id="prenom" name="prenom" value="" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
							    @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
								</div>
							</div>

							<div class="form-group">
                            <div class="col-lg-5" align="right">
							    <label class="control-label ">Adresse</label>
                                </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom" name="adresse" id="adresse" value="" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
							    </div>
							</div>

							<div class="form-group">
                            <div class="col-lg-5" align="right">
							    <label class="control-label ">Code postal</label>
                                </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom" name="codePostale" id="codePostale" value="" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
							    @if ($errors->has('codePostal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codePostal') }}</strong>
                                    </span>
                                @endif
								
								</div>
							</div>

							<div class="form-group">
                            <div class="col-lg-5" align="right">
						        <label class="control-label "> Ville</label>
                                </div>
						        <div class="col-lg-7">
						            <select class="form-control uk-margin-bottom" name="villee" id="villee">
									<option value=""></option>
                                    @foreach($villes as $ville)
                                         <option value="{{$ville->ville_id}}">{{$ville->ville}}</option>
                                        @endforeach
						            </select>
									 @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
						        </div>
						    </div>

						    <div class="form-group">
                            <div class="col-lg-5" align="right">
							    <label class="control-label ">Email</label>
                                </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom" id="email" name="email" value="" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
							     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
								
								</div>
							</div>

							<div class="form-group">
                            <div class="col-lg-5" align="right">
							    <label class="control-label ">Téléphone</label>
                                </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom" id="tel" name="tel" value="" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
							     @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
								</div>
							</div>

							

						   
						   
						  </fieldset>
						
			      	</div>
			      	<div class="col-md-6 infos">
			      		 
			      		 <fieldset>
						    <div class="form-group">
                            <div class="col-lg-5" align="right">
							    <label class="control-label ">Date de naissance</label>
                                </div>
							    <div class="col-lg-7" id="datetimepicker1">
                                    <input name="dateNaissance" type='text' class="form-control uk-margin-bottom datepickerNaissance" id="dateNaissance" placeholder="Date de naissance" value="{{ old('dateNaissance') }}" />
							     @if ($errors->has('dateNaissance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateNaissance') }}</strong>
                                    </span>
                                @endif
								
								</div>
							</div>

							<div class="form-group">
                            <div class="col-lg-5" align="right">
						        <label class="control-label ">Situation matrimoniale</label>
                                </div>
						        <div class="col-lg-7">
						        	<select class="form-control uk-margin-bottom" name="situationMatrimoniale" id="situationMatrimoniale" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
						        		<option selected="selected" value="8">Sélectionner</option>
                                    @foreach($matrimoniales as $matrimoniale)
                                        <option value="{{$matrimoniale->id}}">{{$matrimoniale->libelle}}</option>
                                        @endforeach
						        	</select>
						        </div>
						    </div>
                            <div class="form-group" >
                            <div class="col-lg-5" align="right">
                                <label class="control-label ">Profession</label>
                                </div>
                                <div class="col-lg-7">
                                    <select class="form-control uk-margin-bottom " name="profession" id="profession" value="{{ old('profession') }}">
                                        <option selected="selected" value="19">Sélectionner</option>
                                        @foreach($professions as $profession)
                                        <option value="{{$profession->id}}">{{$profession->libelle}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('profession'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profession') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

						     <div class="form-group">
                             <div class="col-lg-5" align="right">
						        <label class="control-label">Secteur d'activité</label>
                                </div>
						        <div class="col-lg-7">
						        	<select class="form-control uk-margin-bottom " name="secteurActivite" id="secteurActivite" >
						        		<option selected="selected" value="8">Sélectionner</option>
                                        @foreach($secteurs as $secteur)
                                        <option value="{{$secteur->id}}">{{$secteur->libelle}}</option>
                                        @endforeach
						        	</select>
									
						        </div>
						    </div>

						     
                    <div class="form-group">
                    <div class="col-lg-6" align="right">
                               <label class=" control-label"> J'ai des enfants à charge</label>
                               </div>
                                <div class="col-lg-6">
                                <div class="radio-inline">
                                        <label class="radio" for="enfant">OUI<input type="radio" name="enfant"  id="enfant" value="1" ></label>
                                        </div>
                                        <div class="radio-inline">
                                        
                                        <label class="radio" for="enfantNon" checked="true">NON<input type="radio" name="enfant"  id="enfantNon" value="0" ></label>
                                        </div>
                                </div>
                            </div>
                           
                    <div class="off form-group" id="groupeEnfant">
                                <h5 class="col-lg-12" >Année de naissance des 3 plus âgés :</h5>
                                <div class="col-lg-5">
                                	<select class="form-control uk-margin-bottom " name="enfant1" id="enfant1" >
                                		<option selected="selected" value="">1er enfant</option>
                                		<option value="2016">2016</option>
                                		<option value="2015">2015</option>
                                		<option value="2014">2014</option>
                                		<option value="2013">2013</option>
                                		<option value="2012">2012</option>
                                		<option value="2011">2011</option>
                                		<option value="2010">2010</option>
                                		<option value="2009">2009</option>
                                		<option value="2008">2008</option>
                                		<option value="2007">2007</option>
                                		<option value="2006">2006</option>
                                		<option value="2005">2005</option>
                                		<option value="2004">2004</option>
                                		<option value="2003">2003</option>
                                		<option value="2002">2002</option>
                                		<option value="2001">2001</option>
                                		<option value="2000">2000</option>
                                		<option value="1999">1999</option>
                                		<option value="1998">1998</option>
                                		<option value="1997">1997</option>
                                		<option value="1996">1996</option>
                                		<option value="1995">1995</option>
                                		<option value="1994">1994</option>
                                		<option value="1993">1993</option>
                                		<option value="1992">1992</option>
                                		<option value="1991">1991</option>
                                	</select>
                                	<select class="form-control uk-margin-bottom " name="enfant2" id="enfant2" >
                                		<option selected="selected" value="-1">Pas de 2eme enfant</option>
                                		<option value="2016">2016</option>
                                		<option value="2015">2015</option>
                                		<option value="2014">2014</option>
                                		<option value="2013">2013</option>
                                		<option value="2012">2012</option>
                                		<option value="2011">2011</option>
                                		<option value="2010">2010</option>
                                		<option value="2009">2009</option>
                                		<option value="2008">2008</option>
                                		<option value="2007">2007</option>
                                		<option value="2006">2006</option>
                                		<option value="2005">2005</option>
                                		<option value="2004">2004</option>
                                		<option value="2003">2003</option>
                                		<option value="2002">2002</option>
                                		<option value="2001">2001</option>
                                		<option value="2000">2000</option>
                                		<option value="1999">1999</option>
                                		<option value="1998">1998</option>
                                		<option value="1997">1997</option>
                                		<option value="1996">1996</option>
                                		<option value="1995">1995</option>
                                		<option value="1994">1994</option>
                                		<option value="1993">1993</option>
                                		<option value="1992">1992</option>
                                		<option value="1991">1991</option>
                                	</select>
                                	<select class="form-control uk-margin-bottom " name="enfant3" id="enfant3" >
                                		<option selected="selected" value="-1">Pas de 3eme enfant</option>
                                		<option value="2016">2016</option>
                                		<option value="2015">2015</option>
                                		<option value="2014">2014</option>
                                		<option value="2013">2013</option>
                                		<option value="2012">2012</option>
                                		<option value="2011">2011</option>
                                		<option value="2010">2010</option>
                                		<option value="2009">2009</option>
                                		<option value="2008">2008</option>
                                		<option value="2007">2007</option>
                                		<option value="2006">2006</option>
                                		<option value="2005">2005</option>
                                		<option value="2004">2004</option>
                                		<option value="2003">2003</option>
                                		<option value="2002">2002</option>
                                		<option value="2001">2001</option>
                                		<option value="2000">2000</option>
                                		<option value="1999">1999</option>
                                		<option value="1998">1998</option>
                                		<option value="1997">1997</option>
                                		<option value="1996">1996</option>
                                		<option value="1995">1995</option>
                                		<option value="1994">1994</option>
                                		<option value="1993">1993</option>
                                		<option value="1992">1992</option>
                                		<option value="1991">1991</option>
                                	</select>
                                </div>
                            </div>
                            <hr>
                            
						          <div align="center" >
                            <button class="arrondie  btn btn-primary " type="submit" href="" style="margin-top:12px"><h2 style="color:white"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Je compare</br>et je crée mon devis</h2> </button>
                            </div>

						   
						    
						   
						    
						  </fieldset>

						  


						 

						 

 

			      	</div>
			      </div>
               </form>
			  </div>
			  </div>
			  </div>
			  </div>
	    </div>
		<div class="tab-pane" id="tab4">
			
	    </div>
		<div class="tab-pane" id="tab5">
			5
	    </div>
		
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="#">First</a></li>
			<li class="previous"><a href="#">Précédent</a></li>
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
		  	<li class="next"><a href="#">Suivant</a></li>
		</ul>
	</div>
</div>
</div>

@endSection

@section('javascripts')


{{ Html::script('/front-end/js/jquery.js') }} 
{{ Html::script('/front-end/js/bootstrap.js') }} 
{{ Html::script('/front-end/js/jquery.bootstrap.wizard.js') }}
{{ Html::script('/front-end/js/maskedinput/src/jquery.maskedinput.js') }}
{{ Html::script('back-end/libs/bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}
{{ Html::script('back-end/libs/bower/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js') }}



<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 $(document).ready(function () {

    $( ".datepickerNaissance" ).datepicker({
                   format: 'yyyy-mm-dd',
                   language: 'fr',
                   endDate: '-0d'
               
           });
    $( ".datepicker" ).datepicker({
                   format: 'yyyy-mm-dd',
                   language: 'fr',
                   startDate: '-0d'
               
           });
   
    $("#check1").on('change', function() {
           
             
            if($('#check1').prop('checked'))
            {
                
                document.getElementById("ch").className = 'off form-group';
                document.getElementById("ch1").className = 'off form-group';
                document.getElementById("ch2").className = 'off form-group';
                document.getElementById("ch3").className = 'off form-group';
                document.getElementById("ch4").className = 'off form-group';
                document.getElementById("ch5").className = 'off form-group';
                document.getElementById("ch6").className = 'off form-group';
                document.getElementById("ch7").className = 'off form-group';
                document.getElementById("ch8").className = 'off form-group';
                
                     
            }
            
         });
    $("#enfantNon").on('change', function() {
           
             
            if($('#enfantNon').prop('checked'))
            {
                
                document.getElementById("groupeEnfant").className = 'off form-group';
               
                
                     
            }else{
            	document.getElementById("groupeEnfant").className = 'on form-group';
            }
            
         });

     $("#enfant").on('change', function() {
           
             
            if($('#enfant').prop('checked'))
            {
                
                document.getElementById("groupeEnfant").className = 'on form-group';
               
                
                     
            }else{
            	document.getElementById("groupeEnfant").className = 'off form-group';
            }
            
         });

     $("#veranda").on('change', function() {
           
             
            if($('#veranda').prop('checked'))
            {
                
                document.getElementById("surfaceV").className = 'on form-group';
               
                
                     
            }else{
            	document.getElementById("surfaceV").className = 'off form-group';
            }
            
         });
     $("#annexe").on('change', function() {
           
             
            if($('#annexe').prop('checked'))
            {
                
                document.getElementById("surfaceA").className = 'on form-group';
               
                
                     
            }else{
            	document.getElementById("surfaceA").className = 'off form-group';
            }
            
         });

     
      
   

     $("#logementProtection").on('change', function() {
           
             
            if($('#logementProtection').prop('checked'))
            {
                
                document.getElementById("protection").className = 'on form-group';
               
                
                     
            }else{
            	document.getElementById("protection").className = 'off form-group';
            }
            
         });

     $("#logementProtectionNon").on('change', function() {
           
             
            if($('#logementProtectionNon').prop('checked'))
            {
                
                document.getElementById("protection").className = 'off form-group';
               
                
                     
            }else{
            	document.getElementById("protection").className = 'on form-group';
            }
            
         });

     	$("#plusAn").on('change', function() {
           
             
            if($('#plusAn').prop('checked'))
            {
                
                document.getElementById("actuel").className = 'off form-group'; 
                document.getElementById("PrimeContratActuelId").className = 'off form-group';
                document.getElementById('dejaAssurer').value='NON';  
               
                
                     
            }else{
            	document.getElementById("actuel").className = 'on form-group';
                document.getElementById("PrimeContratActuelId").className = 'on form-group';
                document.getElementById('dejaAssurer').value='OUI';  
            }
            
         });

     $("#moinsAn").on('change', function() {
           
             
            if($('#moinsAn').prop('checked'))
            {
                
                document.getElementById("actuel").className = 'on form-group';
                document.getElementById("PrimeContratActuelId").className = 'on form-group';
                document.getElementById('dejaAssurer').value='OUI';  
               
                
                     
            }else{
            	document.getElementById("actuel").className = 'off form-group';
                document.getElementById("PrimeContratActuelId").className = 'off form-group';
                document.getElementById('dejaAssurer').value='NON';  
            }
            
         });




    $("#nombreSinistre").on('change', function() {
           
             
            if($('#nombreSinistre').val() == 1)
            {
                document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'off form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'off form-group';
                document.getElementById('troisiemeSinistre').className      = 'off form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                
                
                 
               
            }
            else if($('#nombreSinistre').val() == 2)
            {
                document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'off form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                 
               
            }
      else if($('#nombreSinistre').val() == 3)
            {
               document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'on form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'on form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                 
               
            }
            else if($('#nombreSinistre').val() == 4)
            {
               document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'on form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'on form-group';
                document.getElementById('quatriemeSinistre').className      = 'on form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'on form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                 
               
            }else if($('#nombreSinistre').val() == 5)
            {
               document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'on form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'on form-group';
                document.getElementById('quatriemeSinistre').className      = 'on form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'on form-group';
                document.getElementById('cinquiemeSinistre').className      = 'on form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'on form-group';
                 
               
            }else{
                document.getElementById('premierSinistre').className        = 'off form-group';
                document.getElementById('premierSinistreDate').className    = 'off form-group';
                document.getElementById('deuxiemeSinistre').className       = 'off form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'off form-group';
                document.getElementById('troisiemeSinistre').className      = 'off form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
      }
         });
         $("#suis").on('change', function() {
           
             
            if($('#suis').val() == 2 || $('#suis').val() == 3)
            {
                
               document.getElementById("ach").className = 'on form-group';
               
                
                     
            }else{
            	document.getElementById("ach").className = 'off form-group';
            }
            
         });
          $('#codePostal').blur(function(){

            var id      = 1;
           var codePostal  = $(this).val();
            //ar urlTaux = $("#urlTaux").val();
        
            $.ajax({
                url     : "{{ URL::to('recupererVille') }}",
                type    : 'POST',
                data    : {codePostal:codePostal}
            }).success(function(data){
              $("#ville").html('<option value=""></option>');
        $.each(data, function(index, value) { // pour chaque noeud JSON
                // on ajoute l option dans la liste
                

                $("#ville").append('<option value="'+ value +'">'+ index +'</option>');
            });

                
      

            }).error(function(){

                //$("#idtaux"+id).addClass('uk-form-danger');
        

            });
        // console.log($(this).attr("data-id") + "  " + $(this).val());


        });
         
    
     $("#tel").mask("99.99.99.99.99");
	$("#codePostal").mask("99999");
    $("#codePostale").mask("99999");
    $("#dateEffet").mask("9999-99-99");
         $("#dateNaissance").mask("9999-99-99");
        $('#rootwizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
        //alert('on tab click disabled');
        return false;
    },onNext: function(tab, navigation, index) {

       
            if(index==1) {
        // Make sure we entered the name
        if(!$('#codePostal').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#codePostal').focus();
          document.getElementById('cp').className  = 'on help-block';
          return false;
        }

        if(!$('#dateEffet').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#dateEffet').focus();
          document.getElementById('de').className  = 'on help-block';
          return false;
        }
      }
       if(index==2) {
        // Make sure we entered the name
        if(!$('#dateEffet').val()) {
          alert('Veuillez remplir tous les champs');
          $('#dateEffet').focus();
          return false;
        }
      }
      }


});

    
});


	
</script>


@endSection
