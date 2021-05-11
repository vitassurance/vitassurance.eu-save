@extends('template.front')

@section('stylesheets')

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
    
    padding: 24px;
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
    'action' => 'AutoController@insertionAuto','files' => true, 'id' => 'form', 'data-validate' => 'parsley'
]) !!}
<br>
<div class="container">
  <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Acceuil</a></li>
                <li><a href="#">devis assurance</a></li>
                <li class="active"> Assurance Auto</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i>Vous recherchez une assurance auto adaptée à vos besoins ?</h3>
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
		<li><a href="#tab2" data-toggle="tab">Votre véhicule</a></li>
		<li><a href="#tab3" data-toggle="tab">Vos antécédents</a></li>
		<li><a href="#tab4" data-toggle="tab">Vos coordonnées</a></li>
		
		
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
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 1. JE DÉCRIS MON BESOIN D'ASSURANCE AUTO</h3>
                 </div>
              <div class="panel-body" style="background-color: #f5f5f5;">
                <div class="row">
                <div class="col-md-6 infos">
                 
                           
                             <div class="form-group">
                                <label class="control-label col-lg-12">Ma recherche concerne</label>
                                <div class="col-lg-12">
                                    <select class="form-control uk-margin-bottom" name="maRecherche" id="maRecherche" >
                                         <option value="1" selected="selected">Une voiture que je possède déjà</option>
                                            <option value="2">Une première voiture</option>
                                            <option value="3">Une voiture supplémentaire</option>
                                            <option value="4">Une voiture de remplacement</option></select>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-12">Cette auto sera</label>
                                <div class="col-lg-12">
                                    <select class="form-control uk-margin-bottom" name="etatAuto" id="etatAuto" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
                                         <option value="1">Neuve</option>
                                        <option value="2" selected="selected">D'occasion</option>
                                        
                                    </select>
                                </div>
                            </div>

                    </div>
                    <div class="col-md-6 infos">
                 <h6 class="col-lg-6" style="margin-left:35px">Je possède mon véhicule actuel depuis</h6>
                    <div class="form-group">
                               
                                <div class="col-lg-12">
                                   <select class="form-control uk-margin-bottom" name="possedeDepuis" id="possedeDepuis" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
                                        <option value="0">Moins d'1 an</option>
                                        <option value="1">1 an</option>
                                        <option value="2">2 ans</option>
                                        <option value="3">3 ans</option>
                                         <option value="4">4 ans</option>
                                        <option value="5" selected="selected">5 ans et plus</option>
                                    </select>
                                </div>
                            </div>

                            <h6 class="col-lg-6" style="margin-left:35px"> Qui est le titulaire de la carte grise</h6>
                    <div class="form-group">
                               
                                <div class="col-lg-12">
                                   <select class="form-control uk-margin-bottom" name="titulaireCarte" id="titulaireCarte" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
                                       <option value="Moi" selected="selected">Moi</option>
                                        <option value="Mon conjoint ou concubin">Mon conjoint ou concubin</option>
                                        <option value="Moi et mon conjoint ou concubin">Moi et mon conjoint ou concubin</option>
                                        <option value="Mon enfant">Mon enfant</option>
                                        <option value="Mon père ou ma mère">Mon père ou ma mère</option>
                                        <option value="Une société de leasing">Une société de leasing</option>
                                        <option value="Véhicule de fonction">Véhicule de fonction</option>
                                        <option value="Autre cas">Autre cas</option>
                                    </select>
                                </div>
                            </div>

                            <h6 class="col-lg-6" style="margin-left:35px"> Conducteur secondaire</h6>
                    <div class="form-group">
                               
                                <div class="col-lg-12">
                                   <select class="form-control uk-margin-bottom" name="conducteurSecondaire" id="conducteurSecondaire" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
                                      <option value="Non" selected="selected">Non</option>
                                      <option value="Oui, mon conjoint ou concubin">Oui, mon conjoint ou concubin</option>
                                      <option value="Oui, mon enfant">Oui, mon enfant</option>
                                    </select>
                                </div>
                            </div>

                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 2. JE DÉCRIS MON PROFIL</h3>
                 </div>
              <div class="panel-body" style="background-color: #f5f5f5;">
                 <form class="test form-horizontal" name="myForm"  >
                  <div class="row">
                    <div class="col-md-6 infos">
                        
                          <fieldset>
                            
                                <div class="form-group ">
                                <div class="col-lg-5" align="right">
                                    <label class="control-label">Date de naissance</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="datetimepicker1 form-control uk-margin-bottom" name="dateNaissance" id="dateNaissance" value="" >
                                        <span class="off help-block" id="dn">
                                        <strong>Merci d'indiquer votre date de naissance</strong>
                                    </span>
                                      
                                    </div>
                                </div>

                                <div class="form-group ">
                                <div class="col-lg-5" align="right">
                                    <label class="control-label">Situation matrimoniale</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <select class="form-control uk-margin-bottom" name="situationMatrimoniale" id="situationMatrimoniale" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
						        		<option value="1">Célibataire</option>

						        		<option selected="selected" value="2">Marié(e)</option>

						        		<option value="3">En concubinage</option>

						        		<option value="4">Séparé(e)</option>

						        		<option value="5">Divorcé(e)</option>

						        		<option value="6">Veuf(ve)</option>

						        		<option value="7">Pacsé(e)</option>
						        	</select>
                                    </div>
                                </div>
                                 <div class="form-group ">
                                 <div class="col-lg-5" align="right">
                                    <label class="control-label">Profession</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <select class="form-control uk-margin-bottom" name="profession" id="profession" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
						        		<option selected="selected" value="">Sélectionner</option>
                        <option value="Salarié">Salarié</option>
                        <option value="Salarié cadre">Salarié cadre</option>
                        <option value="Fonction publique d'état">Fonction publique d'état</option>
                        <option value="Fonction publique territoriale">Fonction publique territoriale</option>
                        <option value="Fonction publique hospitalière">Fonction publique hospitalière</option>
                        <option value="Artisan">Artisan</option>
                        <option value="Commerçant">Commerçant</option>
                        <option value="Profession libérale">Profession libérale</option>
                        <option value="Chef d'entreprise">Chef d'entreprise</option>
                        <option value="Enseignant">Enseignant</option>
                        <option value="Agriculteur">Agriculteur</option>
                        <option value="Exploitant agricole">Exploitant agricole</option>
                        <option value="VRP">VRP</option>
                        <option value="Visiteur médical">Visiteur médical</option>
                        <option value="Etudiant">Etudiant</option>
                        <option value="Retraité">Retraité</option>
                        <option value="Sans profession">Sans profession</option>
                        <option value="En recherche d'emploi">En recherche d'emploi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group ">
                                <div class="col-lg-5" align="right">
                                    <label class="control-label ">Profession exacte</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control uk-margin-bottom" name="professionExacte" id="professionExacte" value="" >
                                    </div>
                                </div>

                                <div class="form-group ">
                                <div class="col-lg-5" align="right">
                                    <label class="control-label ">Secteur d'activité</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <select class="form-control uk-margin-bottom" name="secteurActivite" id="secteurActivite" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
						        		<option value="" selected="selected">Sélectionner</option>
                                        <option value="4">Autre secteur d'activité</option>
                                        <option value="0">BTP/Construction</option>
                                        <option value="3">Économie sociale et solidaire</option>
                                        <option value="1">Métiers de bouche</option>
                                        <option value="2">Santé - Médical - Pharmacie</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                    <div class="col-lg-7" align="right">
                               <label class=" control-label"> Permis passé en conduite accompagnée</label>
                               </div>
                                <div class="col-lg-5">
                                    <div class="radio-inline">
                                        <label class="radio" for="permisAccompagnee">OUI<input type="radio" name="permisAccompagnee"  id="permisAccompagnee" value="1" ></label>
                                        </div>
                                        <div class="radio-inline">
                                        <label class="radio" for="permisAccompagneeNon" checked="true">NON<input type="radio" name="permisAccompagnee"  id="permisAccompagneeNon" value="0" ></label>
                                        </div>
                                </div>
                            </div>

                                    <div class="form-group">
                                    <div class="col-lg-6" align="right">
                                <label class="control-label ">Date d'obtention du permis</label>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="dateObtention" id="dateObtention" >
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
                                    <select class="form-control uk-margin-bottom" name="datePremiereCirculationAnnee" id="datePremiereCirculationAnnee" >
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
                               <div class="col-lg-6" align="right">
                                <label class="control-label" >A-t-il déjà été suspendu, retiré, ou annulé ?</label>
                                </div>
                                <div class="col-lg-6">
                                   <select class="form-control uk-margin-bottom" name="infraction" id="infraction" >
                                        <option selected="selected" value="1">Non, jamais</option>
                                        <option value="2">Oui, suspendu</option>
                                        <option value="3">Oui, retiré</option>
                                        <option value="4">Oui, annulé</option>
                                   </select>

                                </div>
                            </div>
                               
                                <div class="off form-group" id="1">
                                <div class="col-lg-7" align="right">
                                <label class="control-label" >Quand a-t-il été suspendu, retiré ou annulé</label>
                                </div>
                                <div class="col-lg-5">
                                   <select class="form-control uk-margin-bottom" name="quandSRA" id="quandSRA" >
                                        <option selected="selected" value="1">Il y a plus de 5 ans</option>
                                        <option value="2">Il y a moins de 5 ans</option>
                                   </select>

                                </div>
                            </div>

                            

                            <div class="off form-group" id="2">
                            <div class="col-lg-6" align="right">
                                <label class="control-label " >Durée de la suspension ou du retrait</label>
                                </div>
                                <div class="col-lg-6">
                                   <select class="form-control uk-margin-bottom" name="dureeSR" id="dureeSR" >
                                        <option selected="selected" value="1">1 mois</option>
                                        <option value="2">2 mois</option>
                                   </select>

                                </div>
                            </div>

                            <div class="off form-group" id="annule">
                            <div class="col-lg-5" align="right">
                                <label class="control-label" >Cause de l'annulation de permis</label>
                                </div>
                                <div class="col-lg-7">
                                   <select class="form-control uk-margin-bottom" name="causeAnnulation" id="causeAnnulation" >
                                        <option value="" selected="selected">Sélectionner</option>
                                        <option value="1">Alcoolémie</option>
                                        <option value="2">Défaut de points</option>
                                        <option value="3">Délit de fuite</option>
                                        <option value="4">Autre</option>
                                   </select>

                                </div>
                            </div>
                                
                           
                          </fieldset>
                        
                    </div>
                    <div class="col-md-6 infos">
                         
                         <fieldset>
                          
                           
                           <div class="form-group">
                               <label class="col-lg-6 control-label"> J'ai des enfants à charge</label>
                                <div class="col-lg-6" style="display:inline">
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
                                	<select class="form-control uk-margin-bottom " name="secteurActivite" id="premierEnfant" >
                                		<option selected="selected" value="-1">1er enfant</option>
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
                                	<select class="form-control uk-margin-bottom " name="secteurActivite" id="deuxiemeEnfant" >
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
                                	<select class="form-control uk-margin-bottom " name="secteurActivite" id="troisiemeEnfant" >
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
                            
                          </fieldset>

                    </div>
                  </div>
               </form>
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
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 3. Je décris mon véhicule</h3>
                 </div>
              <div class="panel-body" style="background-color:#f5f5f5 ;padding:30px 0px;">
                <div class="row">
                 <div class="form-group">
                 <div class="col-lg-4" align="right">
                 <label class="control-label ">Date d’achat de mon véhicule</label>
                 </div>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control uk-margin-bottom" name="dateAchatVehicule" id="dateAchatVehicule" value="" >
                                    <span class="off help-block" id="da">
                                        <strong>Merci d'indiquer la date d'achat de votre de votre vehicule</strong>
                                    </span>
                                </div>
                </div>
                                 <div class="form-group">
                                 <div class="col-lg-4" align="right">
                                <label class="control-label ">Date de la première mise en circulation</label>
                                </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="datePremiereCirculationMois" id="datePremiereCirculationMois" >
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
                                    <select class="form-control uk-margin-bottom" name="datePremiereCirculationAnnee" id="datePremiereCirculationAnnee" >
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
                           <div class="col-lg-4" align="right">
                 <label class="control-label ">Nombre approximatif de kilomètres parcourus par an</label>
                 </div>
                                <div class="col-lg-6">
                                   <select class="form-control uk-margin-bottom" name="nombreKiloAn" id="nombreKiloAn" >
                                        <option value="1">Moins de 5 000</option>
                                        <option value="2">5 000</option>
                                        <option value="3">10 000</option>
                                        <option value="4" selected="selected">15 000</option>
                                        <option value="5">20 000</option>
                                        <option value="6">25 000</option>
                                        <option value="7">30 000</option>
                                        <option value="8">Plus de 30 000</option>>
                                     
                                   </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-4" align="right">
                 <label class="control-label ">Mode de financement de mon véhicule</label>
                 </div>
                                <div class="col-lg-6">
                                   <select class="form-control uk-margin-bottom" name="modeFinancement" id="modeFinancement" >
                                       <option value="1" selected="selected">Comptant</option>
                                        <option value="2">Crédit</option>
                                        <option value="3">Leasing</option>
                                        <option value="4">Don</option>
                                   </select>
                                </div>
                            </div>

                             <div class="form-group">
                             <div class="col-lg-4" align="right">
                               <label class="control-label">Concernant mon logement, je suis</label>
                               </div>
                                <div class="col-lg-6">
                                    
                                        <label class="radio" for="locataire">Locataire<input type="radio"  name="logements"  id="locataire" value="1" ></label>
                                        
                                        <label class="radio" for="proprietaire" checked="true">Propriétaire<input type="radio" name="logements"  id="proprietaire" value="0" ></label>
                                        
                                        <label class="radio" for="autre" checked="true">Autre<input type="radio" name="logements"  id="autre" value="0" ></label>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-4" align="right">
                 <label class="control-label">Usage prévu de mon véhicule</label>
                 </div>
                                <div class="col-lg-6">
                                   <select class="form-control uk-margin-bottom" name="usagePrevu" id="usagePrevu" >
                                      <option value="1">Usage privé</option>
                                        <option value="2" selected="selected">Usage privé et trajet travail</option>
                                        <option value="3">Usage privé et professionnel</option>
                                        <option value="4">Usage privé et tournées régulières</option>
                                   </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-4" align="right">
                 <label class="control-label ">Type de parking la nuit</label>
                 </div>
                                <div class="col-lg-6">
                                   <select class="form-control uk-margin-bottom" name="typeParking" id="typeParking" >
                                      <option value="1" selected="selected">Garage individuel fermé</option>
                                        <option value="2">Parking collectif fermé</option>
                                        <option value="3">Parking collectif en plein air</option>
                                        <option value="4">Jardin privé en plein air</option>
                                        <option value="5">Voie publique</option>
                                   </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <div class="col-lg-4" align="right">
                                <label class="control-label ">Code postal et ville du lieu de stationnement la nuit</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control uk-margin-bottom" name="codePostalNuit" id="codePostalNuit" value="">
                                    <span class="off help-block" id="cpn">
                                        <strong>Merci d'indiquer le code postal</strong>
                                    </span>
                               </div>
                               <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="villeNuit" id="villeNuit" >
                                       <option selected="selected" value="-1">Ville</option>
                                       
                                       <option value="Paris">Paris</option>
                                     
                                   </select>
                                   <span class="off help-block" id="villeN">
                                        <strong>Merci d'indiquer la ville</strong>
                                    </span>
                               </div>

                           </div>

                           <div class="on form-group" id="travail">
                           <div class="col-lg-4" align="right">
                                <label class="control-label">Code postal et ville du lieu de travail</label>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control uk-margin-bottom" name="codePostalTravail" id="codePostalTravail" value="">
                                    <span class="off help-block" id="cpt">
                                        <strong>Merci d'indiquer le code postal du travail</strong>
                                    </span>
                               </div>
                               <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="villeTravail" id="villeTravail" >
                                       <option selected="selected" value="-1">Ville</option>
                                       
                                       <option value="Paris">Paris</option>
                                     
                                   </select>
                                   <span class="off help-block" id="villeT">
                                        <strong>Merci d'indiquer la ville</strong>
                                    </span>
                               </div>

                           </div>

                           <div class="form-group">
                <div class="col-lg-4" align="right">
                                <label class="control-label ">Je sélectionne mon véhicule par </label>
                                </div>
                               <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="marqueAuto" id="marqueAuto" >
                                       <option selected="selected" value="-1">Marque</option>
                                       @foreach($marques as $marque)
                                       <option value="{{$marque->id}}">{{$marque->nom_marque}}</option>
                                       @endforeach
                                   </select>

                               </div>
                                <div class="col-lg-3">
                                    <select class="form-control uk-margin-bottom" name="modelAuto" id="modelAuto" >
                                       <option selected="selected" value="-1">Model</option>
                                       
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
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 4. Je décris mes antécédents</h3>
                 </div>
              <div class="panel-body" style="background-color: #f5f5f5;padding:30px 3px;">
                <div class="row">
               
                 <div class="form-group">
                 <div class="col-lg-5" align="right">
                                <label class=" control-label">Je suis actuellement assuré</label>
                                </div>
                                <div class="col-lg-7">

                                     <select class="form-control uk-margin-bottom" name="actuellementAssure" id="actuellementAssure" >
                                         <option value="0">Moins d'un an</option>
                                    <option value="4" selected="selected">Oui, comme conducteur principal</option>
                                    <option value="5">Oui, comme conducteur secondaire</option>
                                    <option value="3">Non</option>
                                    <option value="1">Non, mais auparavant comme conducteur principal</option>
                                    <option value="2">Non, mais auparavant comme conducteur secondaire</option>
                                   </select>
                                </div>

                            </div>

               
                            <div class="on form-group" id="ch">
                            <div class="col-lg-5" align="right">
                                <label class="control-label " >Pendant combien d'années ?</label>
                                </div>
                                <div class="col-lg-7">
                                   <select class="form-control uk-margin-bottom" name="nombreAnnee" id="nombreAnnee" >
                                         <option value="0">Moins d'un an</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                                 <option value="9">9</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16">16</option>
                                 <option selected="selected" value="17">17</option>
                                   </select>

                                </div>
                            </div>
                          

                              <div class="form-group" id="ch6">
                              <div class="col-lg-5" align="right">
                                <label class="control-label " >Mon bonus/malus</label>
                                </div>
                                <div class="col-lg-7">
                                 <select class="form-control uk-margin-bottom" name="bonusMalus" id="bonusMalus" >
                                   <option value="80">50% de bonus depuis 8 ans et +</option>
                                   <option value="70">50% de bonus depuis 7 ans</option>
                                   <option value="60">50% de bonus depuis 6 ans</option>
                                   <option value="50">50% de bonus depuis 5 ans</option>
                                   <option selected="selected" value="40">50% de bonus depuis 4 ans</option>
                                   <option value="30">50% de bonus depuis 3 ans</option>
                                   <option value="20">50% de bonus depuis 2 ans</option>
                                   <option value="10">50% de bonus depuis 1 ans</option>
                                   <option value="0.50">50% de bonus depuis 0 an</option>
                                   <option value="0.51">0,51 soit 49% de bonus</option>
                                   <option value="0.52">0,52 soit 48% de bonus</option>
                                   <option value="0.53">0,53 soit 47% de bonus</option>
                                   <option value="0.54">0,54 soit 46% de bonus</option>
                                   <option value="0.55">0,55 soit 45% de bonus</option>
                                   <option value="0.56">0,56 soit 44% de bonus</option>
                                   <option value="0.57">0,57 soit 43% de bonus</option>
                                   <option value="0.58">0,58 soit 42% de bonus</option>
                                   <option value="0.59">0,59 soit 41% de bonus</option>
                                   <option value="0.60">0,60 soit 40% de bonus</option>
                                   <option value="0.61">0,61 soit 39% de bonus</option>
                                   <option value="0.62">0,62 soit 38% de bonus</option>
                                   <option value="0.63">0,63 soit 37% de bonus</option>
                                   <option value="0.64">0,64 soit 36% de bonus</option>
                                   <option value="0.65">0,65 soit 35% de bonus</option>
                                   <option value="0.66">0,66 soit 34% de bonus</option>
                                   <option value="0.67">0,67 soit 33% de bonus</option>
                                   <option value="0.68">0,68 soit 32% de bonus</option>
                                   <option value="0.69">0,69 soit 31% de bonus</option>
                                   <option value="0.70">0,70 soit 30% de bonus</option>
                                   <option value="0.71">0,71 soit 29% de bonus</option>
                                   <option value="0.72">0,72 soit 28% de bonus</option>
                                   <option value="0.73">0,73 soit 27% de bonus</option>
                                   <option value="0.74">0,74 soit 26% de bonus</option>
                                   <option value="0.75">0,75 soit 25% de bonus</option>
                                   <option value="0.76">0,76 soit 24% de bonus</option>
                                   <option value="0.77">0,77 soit 23% de bonus</option>
                                   <option value="0.78">0,78 soit 22% de bonus</option>
                                   <option value="0.79">0,79 soit 21% de bonus</option>
                                   <option value="0.80">0,80 soit 20% de bonus</option>
                                   <option value="0.81">0,81 soit 19% de bonus</option>
                                   <option value="0.82">0,82 soit 18% de bonus</option>
                                   <option value="0.83">0,83 soit 17% de bonus</option>
                                   <option value="0.84">0,84 soit 16% de bonus</option>
                                   <option value="0.85">0,85 soit 15% de bonus</option>
                                   <option value="0.86">0,86 soit 14% de bonus</option>
                                   <option value="0.87">0,87 soit 13% de bonus</option>
                                   <option value="0.88">0,88 soit 12% de bonus</option>
                                   <option value="0.89">0,89 soit 11% de bonus</option>
                                   <option value="0.90">0,90 soit 10% de bonus</option>
                                   <option value="0.91">0,91 soit 9% de bonus</option>
                                   <option value="0.92">0,92 soit 8% de bonus</option>
                                   <option value="0.93">0,93 soit 7% de bonus</option>
                                   <option value="0.94">0,94 soit 6% de bonus</option>
                                   <option value="0.95">0,95 soit 5% de bonus</option>
                                   <option value="0.96">0,96 soit 4% de bonus</option>
                                   <option value="0.97">0,97 soit 3% de bonus</option>
                                   <option value="0.98">0,98 soit 2% de bonus</option>
                                   <option value="0.99">0,99 soit 1% de bonus</option>
                                   <option value="1.00">1 soit ni bonus, ni malus</option>
                                   <option value="1.01">1,01 soit 1% de malus</option>
                                   <option value="1.02">1,02 soit 2% de malus</option>
                                   <option value="1.03">1,03 soit 3% de malus</option>
                                   <option value="1.04">1,04 soit 4% de malus</option>
                                   <option value="1.05">1,05 soit 5% de malus</option>
                                   <option value="1.06">1,06 soit 6% de malus</option>
                                   <option value="1.07">1,07 soit 7% de malus</option>
                                   <option value="1.08">1,08 soit 8% de malus</option>
                                   <option value="1.09">1,09 soit 9% de malus</option>
                                   <option value="1.10">1,10 soit 10% de malus</option>
                                   <option value="1.11">1,11 soit 11% de malus</option>
                                   <option value="1.12">1,12 soit 12% de malus</option>
                                   <option value="1.13">1,13 soit 13% de malus</option>
                                   <option value="1.14">1,14 soit 14% de malus</option>
                                   <option value="1.15">1,15 soit 15% de malus</option>
                                   <option value="1.16">1,16 soit 16% de malus</option>
                                   <option value="1.17">1,17 soit 17% de malus</option>
                                   <option value="1.18">1,18 soit 18% de malus</option>
                                   <option value="1.19">1,19 soit 19% de malus</option>
                                   <option value="1.20">1,20 soit 20% de malus</option>
                                   <option value="1.21">1,21 soit 21% de malus</option>
                                   <option value="1.22">1,22 soit 22% de malus</option>
                                   <option value="1.23">1,23 soit 23% de malus</option>
                                   <option value="1.24">1,24 soit 24% de malus</option>
                                   <option value="1.25">1,25 soit 25% de malus</option>
                                   <option value="1.26">1,26 soit 26% de malus</option>
                                   <option value="1.27">1,27 soit 27% de malus</option>
                                   <option value="1.28">1,28 soit 28% de malus</option>
                                   <option value="1.29">1,29 soit 29% de malus</option>
                                   <option value="1.30">1,30 soit 30% de malus</option>
                                   <option value="1.31">1,31 soit 31% de malus</option>
                                   <option value="1.32">1,32 soit 32% de malus</option>
                                   <option value="1.33">1,33 soit 33% de malus</option>
                                   <option value="1.34">1,34 soit 34% de malus</option>
                                   <option value="1.35">1,35 soit 35% de malus</option>
                                   <option value="1.36">1,36 soit 36% de malus</option>
                                   <option value="1.37">1,37 soit 37% de malus</option>
                                   <option value="1.38">1,38 soit 38% de malus</option>
                                   <option value="1.39">1,39 soit 39% de malus</option>
                                   <option value="1.40">1,40 soit 40% de malus</option>
                                   <option value="1.41">1,41 soit 41% de malus</option>
                                   <option value="1.42">1,42 soit 42% de malus</option>
                                   <option value="1.43">1,43 soit 43% de malus</option>
                                   <option value="1.44">1,44 soit 44% de malus</option>
                                   <option value="1.45">1,45 soit 45% de malus</option>
                                   <option value="1.46">1,46 soit 46% de malus</option>
                                   <option value="1.47">1,47 soit 47% de malus</option>
                                   <option value="1.48">1,48 soit 48% de malus</option>
                                   <option value="1.49">1,49 soit 49% de malus</option>
                                   <option value="1.50">1,50 soit 50% de malus</option>
                                   <option value="1.51">1,51 soit 51% de malus</option>
                                   <option value="1.52">1,52 soit 52% de malus</option>
                                   <option value="1.53">1,53 soit 53% de malus</option>
                                   <option value="1.54">1,54 soit 54% de malus</option>
                                   <option value="1.55">1,55 soit 55% de malus</option>
                                   <option value="1.56">1,56 soit 56% de malus</option>
                                   <option value="1.57">1,57 soit 57% de malus</option>
                                   <option value="1.58">1,58 soit 58% de malus</option>
                                   <option value="1.59">1,59 soit 59% de malus</option>
                                   <option value="1.60">1,60 soit 60% de malus</option>
                                   <option value="1.61">1,61 soit 61% de malus</option>
                                   <option value="1.62">1,62 soit 62% de malus</option>
                                   <option value="1.63">1,63 soit 63% de malus</option>
                                   <option value="1.64">1,64 soit 64% de malus</option>
                                   <option value="1.65">1,65 soit 65% de malus</option>
                                   <option value="1.66">1,66 soit 66% de malus</option>
                                   <option value="1.67">1,67 soit 67% de malus</option>
                                   <option value="1.68">1,68 soit 68% de malus</option>
                                   <option value="1.69">1,69 soit 69% de malus</option>
                                   <option value="1.70">1,70 soit 70% de malus</option>
                                   <option value="1.71">1,71 soit 71% de malus</option>
                                   <option value="1.72">1,72 soit 72% de malus</option>
                                   <option value="1.73">1,73 soit 73% de malus</option>
                                   <option value="1.74">1,74 soit 74% de malus</option>
                                   <option value="1.75">1,75 soit 75% de malus</option>
                                   <option value="1.76">1,76 soit 76% de malus</option>
                                   <option value="1.77">1,77 soit 77% de malus</option>
                                   <option value="1.78">1,78 soit 78% de malus</option>
                                   <option value="1.79">1,79 soit 79% de malus</option>
                                   <option value="1.80">1,80 soit 80% de malus</option>
                                   <option value="1.81">1,81 soit 81% de malus</option>
                                   <option value="1.82">1,82 soit 82% de malus</option>
                                   <option value="1.83">1,83 soit 83% de malus</option>
                                   <option value="1.84">1,84 soit 84% de malus</option>
                                   <option value="1.85">1,85 soit 85% de malus</option>
                                   <option value="1.86">1,86 soit 86% de malus</option>
                                   <option value="1.87">1,87 soit 87% de malus</option>
                                   <option value="1.88">1,88 soit 88% de malus</option>
                                   <option value="1.89">1,89 soit 89% de malus</option>
                                   <option value="1.90">1,90 soit 90% de malus</option>
                                   <option value="1.91">1,91 soit 91% de malus</option>
                                   <option value="1.92">1,92 soit 92% de malus</option>
                                   <option value="1.93">1,93 soit 93% de malus</option>
                                   <option value="1.94">1,94 soit 94% de malus</option>
                                   <option value="1.95">1,95 soit 95% de malus</option>
                                   <option value="1.96">1,96 soit 96% de malus</option>
                                   <option value="1.97">1,97 soit 97% de malus</option>
                                   <option value="1.98">1,98 soit 98% de malus</option>
                                   <option value="1.99">1,99 soit 99% de malus</option>
                                   <option value="2.00">2,00 soit 100% de malus</option>
                                   <option value="2.01">2,01 soit 101% de malus</option>
                                   <option value="2.02">2,02 soit 102% de malus</option>
                                   <option value="2.03">2,03 soit 103% de malus</option>
                                   <option value="2.04">2,04 soit 104% de malus</option>
                                   <option value="2.05">2,05 soit 105% de malus</option>
                                   <option value="2.06">2,06 soit 106% de malus</option>
                                   <option value="2.07">2,07 soit 107% de malus</option>
                                   <option value="2.08">2,08 soit 108% de malus</option>
                                   <option value="2.09">2,09 soit 109% de malus</option>
                                   <option value="2.10">2,10 soit 110% de malus</option>
                                   <option value="2.11">2,11 soit 111% de malus</option>
                                   <option value="2.12">2,12 soit 112% de malus</option>
                                   <option value="2.13">2,13 soit 113% de malus</option>
                                   <option value="2.14">2,14 soit 114% de malus</option>
                                   <option value="2.15">2,15 soit 115% de malus</option>
                                   <option value="2.16">2,16 soit 116% de malus</option>
                                   <option value="2.17">2,17 soit 117% de malus</option>
                                   <option value="2.18">2,18 soit 118% de malus</option>
                                   <option value="2.19">2,19 soit 119% de malus</option>
                                   <option value="2.20">2,20 soit 120% de malus</option>
                                   <option value="2.21">2,21 soit 121% de malus</option>
                                   <option value="2.22">2,22 soit 122% de malus</option>
                                   <option value="2.23">2,23 soit 123% de malus</option>
                                   <option value="2.24">2,24 soit 124% de malus</option>
                                   <option value="2.25">2,25 soit 125% de malus</option>
                                   <option value="2.26">2,26 soit 126% de malus</option>
                                   <option value="2.27">2,27 soit 127% de malus</option>
                                   <option value="2.28">2,28 soit 128% de malus</option>
                                   <option value="2.29">2,29 soit 129% de malus</option>
                                   <option value="2.30">2,30 soit 130% de malus</option>
                                   <option value="2.31">2,31 soit 131% de malus</option>
                                   <option value="2.32">2,32 soit 132% de malus</option>
                                   <option value="2.33">2,33 soit 133% de malus</option>
                                   <option value="2.34">2,34 soit 134% de malus</option>
                                   <option value="2.35">2,35 soit 135% de malus</option>
                                   <option value="2.36">2,36 soit 136% de malus</option>
                                   <option value="2.37">2,37 soit 137% de malus</option>
                                   <option value="2.38">2,38 soit 138% de malus</option>
                                   <option value="2.39">2,39 soit 139% de malus</option>
                                   <option value="2.40">2,40 soit 140% de malus</option>
                                   <option value="2.41">2,41 soit 141% de malus</option>
                                   <option value="2.42">2,42 soit 142% de malus</option>
                                   <option value="2.43">2,43 soit 143% de malus</option>
                                   <option value="2.44">2,44 soit 144% de malus</option>
                                   <option value="2.45">2,45 soit 145% de malus</option>
                                   <option value="2.46">2,46 soit 146% de malus</option>
                                   <option value="2.47">2,47 soit 147% de malus</option>
                                   <option value="2.48">2,48 soit 148% de malus</option>
                                   <option value="2.49">2,49 soit 149% de malus</option>
                                   <option value="2.50">2,50 soit 150% de malus</option>
                                   <option value="2.51">2,51 soit 151% de malus</option>
                                   <option value="2.52">2,52 soit 152% de malus</option>
                                   <option value="2.53">2,53 soit 153% de malus</option>
                                   <option value="2.54">2,54 soit 154% de malus</option>
                                   <option value="2.55">2,55 soit 155% de malus</option>
                                   <option value="2.56">2,56 soit 156% de malus</option>
                                   <option value="2.57">2,57 soit 157% de malus</option>
                                   <option value="2.58">2,58 soit 158% de malus</option>
                                   <option value="2.59">2,59 soit 159% de malus</option>
                                   <option value="2.60">2,60 soit 160% de malus</option>
                                   <option value="2.61">2,61 soit 161% de malus</option>
                                   <option value="2.62">2,62 soit 162% de malus</option>
                                   <option value="2.63">2,63 soit 163% de malus</option>
                                   <option value="2.64">2,64 soit 164% de malus</option>
                                   <option value="2.65">2,65 soit 165% de malus</option>
                                   <option value="2.66">2,66 soit 166% de malus</option>
                                   <option value="2.67">2,67 soit 167% de malus</option>
                                   <option value="2.68">2,68 soit 168% de malus</option>
                                   <option value="2.69">2,69 soit 169% de malus</option>
                                   <option value="2.70">2,70 soit 170% de malus</option>
                                   <option value="2.71">2,71 soit 171% de malus</option>
                                   <option value="2.72">2,72 soit 172% de malus</option>
                                   <option value="2.73">2,73 soit 173% de malus</option>
                                   <option value="2.74">2,74 soit 174% de malus</option>
                                   <option value="2.75">2,75 soit 175% de malus</option>
                                   <option value="2.76">2,76 soit 176% de malus</option>
                                   <option value="2.77">2,77 soit 177% de malus</option>
                                   <option value="2.78">2,78 soit 178% de malus</option>
                                   <option value="2.79">2,79 soit 179% de malus</option>
                                   <option value="2.80">2,80 soit 180% de malus</option>
                                   <option value="2.81">2,81 soit 181% de malus</option>
                                   <option value="2.82">2,82 soit 182% de malus</option>
                                   <option value="2.83">2,83 soit 183% de malus</option>
                                   <option value="2.84">2,84 soit 184% de malus</option>
                                   <option value="2.85">2,85 soit 185% de malus</option>
                                   <option value="2.86">2,86 soit 186% de malus</option>
                                   <option value="2.87">2,87 soit 187% de malus</option>
                                   <option value="2.88">2,88 soit 188% de malus</option>
                                   <option value="2.89">2,89 soit 189% de malus</option>
                                   <option value="2.90">2,90 soit 190% de malus</option>
                                   <option value="2.91">2,91 soit 191% de malus</option>
                                   <option value="2.92">2,92 soit 192% de malus</option>
                                   <option value="2.93">2,93 soit 193% de malus</option>
                                   <option value="2.94">2,94 soit 194% de malus</option>
                                   <option value="2.95">2,95 soit 195% de malus</option>
                                   <option value="2.96">2,96 soit 196% de malus</option>
                                   <option value="2.97">2,97 soit 197% de malus</option>
                                   <option value="2.98">2,98 soit 198% de malus</option>
                                   <option value="2.99">2,99 soit 199% de malus</option>
                                   <option value="3.00">3,00 soit 200% de malus</option>
                                   <option value="3.01">3,01 soit 201% de malus</option>
                                   <option value="3.02">3,02 soit 202% de malus</option>
                                   <option value="3.03">3,03 soit 203% de malus</option>
                                   <option value="3.04">3,04 soit 204% de malus</option>
                                   <option value="3.05">3,05 soit 205% de malus</option>
                                   <option value="3.06">3,06 soit 206% de malus</option>
                                   <option value="3.07">3,07 soit 207% de malus</option>
                                   <option value="3.08">3,08 soit 208% de malus</option>
                                   <option value="3.09">3,09 soit 209% de malus</option>
                                   <option value="3.10">3,10 soit 210% de malus</option>
                                   <option value="3.11">3,11 soit 211% de malus</option>
                                   <option value="3.12">3,12 soit 212% de malus</option>
                                   <option value="3.13">3,13 soit 213% de malus</option>
                                   <option value="3.14">3,14 soit 214% de malus</option>
                                   <option value="3.15">3,15 soit 215% de malus</option>
                                   <option value="3.16">3,16 soit 216% de malus</option>
                                   <option value="3.17">3,17 soit 217% de malus</option>
                                   <option value="3.18">3,18 soit 218% de malus</option>
                                   <option value="3.19">3,19 soit 219% de malus</option>
                                   <option value="3.20">3,20 soit 220% de malus</option>
                                   <option value="3.21">3,21 soit 221% de malus</option>
                                   <option value="3.22">3,22 soit 222% de malus</option>
                                   <option value="3.23">3,23 soit 223% de malus</option>
                                   <option value="3.24">3,24 soit 224% de malus</option>
                                   <option value="3.25">3,25 soit 225% de malus</option>
                                   <option value="3.26">3,26 soit 226% de malus</option>
                                   <option value="3.27">3,27 soit 227% de malus</option>
                                   <option value="3.28">3,28 soit 228% de malus</option>
                                   <option value="3.29">3,29 soit 229% de malus</option>
                                   <option value="3.30">3,30 soit 230% de malus</option>
                                   <option value="3.31">3,31 soit 231% de malus</option>
                                   <option value="3.32">3,32 soit 232% de malus</option>
                                   <option value="3.33">3,33 soit 233% de malus</option>
                                   <option value="3.34">3,34 soit 234% de malus</option>
                                   <option value="3.35">3,35 soit 235% de malus</option>
                                   <option value="3.36">3,36 soit 236% de malus</option>
                                   <option value="3.37">3,37 soit 237% de malus</option>
                                   <option value="3.38">3,38 soit 238% de malus</option>
                                   <option value="3.39">3,39 soit 239% de malus</option>
                                   <option value="3.40">3,40 soit 240% de malus</option>
                                   <option value="3.41">3,41 soit 241% de malus</option>
                                   <option value="3.42">3,42 soit 242% de malus</option>
                                   <option value="3.43">3,43 soit 243% de malus</option>
                                   <option value="3.44">3,44 soit 244% de malus</option>
                                   <option value="3.45">3,45 soit 245% de malus</option>
                                   <option value="3.46">3,46 soit 246% de malus</option>
                                   <option value="3.47">3,47 soit 247% de malus</option>
                                   <option value="3.48">3,48 soit 248% de malus</option>
                                   <option value="3.49">3,49 soit 249% de malus</option>
                                   <option value="3.50">3,50 soit 250% de malus</option>
                               </select>

                                </div>
                            </div>

                             <div class="form-group">
                             <div class="col-lg-5" align="right">
                                <label class="control-label">Je suis assuré en tant que conducteur principal pour un autre véhicule</label>
                                </div>
                                <div class="col-lg-7">

                                    <div class="form-group" >
						      <label class="radio-inline"><input type="radio" name="optradio" id="check" checked>Oui</label>
								<label class="radio-inline"><input type="radio" name="optradio" id="check1">Non, jamais</label>
						    </div>

                                        

                                </div>
                            </div>

                            <br>

                             <div class="panel-body" id="ch7">
                <div class="row">
                <div class="form-group">
                                <label class="control-label col-lg-12">
Antécédents de sinistres<br>
Au cours des 3 dernières années :</label>
                               

                           </div>
                </div>
                </div>
                <br>

                 <div class="form-group" id="ch2">
                    <div class="col-lg-5" align="right">
                                <label class="control-label " >J'ai fait l’objet d’une résiliation par un assureur :</label>
                                </div>
                                <div class="col-lg-7">
                                 <select class="form-control uk-margin-bottom" name="objetResiliation" id="objetResiliation" >
                                    <option selected="selected" value="1">Non</option>
                                    <option value="2">Oui, pour sinistre</option>
                                    <option value="3">Oui, pour fausse déclaration</option>
                                    <option value="4">Oui, pour non paiement de prime</option>
                                </select>

                                </div>
                            </div>

                <div class="form-group" id="ch8">
                <div class="col-lg-5" align="right">
                                <label class="control-label " >Nombre de sinistres déclarés :</label>
                                </div>
                                <div class="col-lg-7">
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

                            <div class="off form-group" id="premierSinistreConducteur">
                            <div class="col-lg-4" align="right">
                  <label class="control-label ">Conducteur</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="premierC" id="premierC" >
                    <option value="1" selected="selected">Moi</option>
                    <option value="2">Un autre conducteur</option>
                    </select>
                  </div>
              </div>


                            <div class="off form-group" id="deuxiemeSinistre">
                            <div class="col-lg-4" align="right">
                  <label class="control-label ">Type du 2eme sinistre</label>
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

                           <div class="off form-group" id="deuxiemeSinistreConducteur">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Conducteur</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="deuxiemeC" id="deuxiemeC" >
                    <option value="1" selected="selected">Moi</option>
                    <option value="2">Un autre conducteur</option>
                    </select>
                  </div>
              </div>

                           <div class="off form-group" id="troisiemeSinistre">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Type du 3eme sinistre</label>
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
               <div class="off form-group" id="troisiemeSinistreDate">
               <div class="col-lg-5" align="right">
                                <label class="control-label">Date</label>
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

                           <div class="off form-group" id="troisiemeSinistreConducteur">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Conducteur</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="troisiemeC" id="troisiemeC" >
                    <option value="1" selected="selected">Moi</option>
                    <option value="2">Un autre conducteur</option>
                    </select>
                  </div>
              </div>

                           <div class="off form-group" id="quatriemeSinistre">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Type du 4eme sinistre</label>
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

                           <div class="off form-group" id="quatriemeSinistreConducteur">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Conducteur</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="quatriemeC" id="quatriemeC" >
                    <option value="1" selected="selected">Moi</option>
                    <option value="2">Un autre conducteur</option>
                    </select>
                  </div>
              </div>

                           <div class="off form-group" id="cinquiemeSinistre">
                           <div class="col-lg-4" align="right">
                  <label class="control-label ">Type du 5eme sinistre</label>
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

              

               <div class="off form-group" id="cinquiemeSinistreDate">
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

                             <div class="off form-group" id="cinquiemeSinistreConducteur">
                             <div class="col-lg-4" align="right">
                  <label class="control-label ">Conducteur</label>
                  </div>
                  <div class="col-lg-7">
                  <select class="form-control uk-margin-bottom" name="cinquiemeC" id="cinquiemeC" >
                    <option value="1" selected="selected">Moi</option>
                    <option value="2">Un autre conducteur</option>
                    </select>
                  </div>
              </div>

                            
                       
                            <div class="off form-group" id="ch9">
                            <div class="col-lg-5" align="right">
                                <label class="control-label">Mon contrat est actuellement résilié ou suspendu :</label>
                                </div>
                                <div class="col-lg-7">

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_3">Oui<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_3" value="3" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                       
                                        <label class="radio" for="1018_2">Non<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-lg-8">
                                            Mon contrat</label>


                                        </div>
                                    </div>
                                </div>
                                <br>
                                 <div class="form-group">
                                 <div class="col-lg-5" align="right">
                                <label class="control-label " >Mon assureur auto actuel :</label>
                                </div>
                                <div class="col-lg-7">
                                   <select class="form-control uk-margin-bottom" name="assureurActuel" id="assureurActuel" >
                                    <option selected="selected" value="">Sélectionner</option>
                                    <option value="48">4Assur</option>
                                    <option value="47">ACommeAssure</option>
                                    <option value="49">Active Assurances</option>
                                    <option value="2">Allianz AGF</option>
                                    <option value="50">AllSecur</option>
                                    <option value="32">Aloa Assurances</option>
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
                                  <div class="col-lg-4" align="right">
                                <label class=" control-label">Niveau de garanties de votre contrat actuel :</label>
                                </div>
                                <div class="col-lg-8">

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="nonAssure">Non assuré<input type="radio" name="nonAssure" data-validation="RadioValidateur" id="nonAssure" value="3" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                       
                                        <label class="radio" for="Assure">Assuré au tiers <input type="radio" name="nonAssure" data-validation="RadioValidateur" id="Assure" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="AssureTR">Assuré tous risques<input type="radio" name="nonAssure" data-validation="RadioValidateur" id="AssureTR" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="AssureNG">Assuré à un autre niveau de garantie<input type="radio" name="nonAssure" data-validation="RadioValidateur" id="AssureNG" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="on form-group" id="vehiculeNonAssure">
                            <div class="col-lg-5" align="right">
                                <label class="control-label " >Mon véhicule n'est plus assuré depuis :</label>
                                </div>
                                <div class="col-lg-7">
                                   <select class="form-control uk-margin-bottom" name="nonAssureDepuis" id="nonAssureDepuis" >
                                         <option value="">Sélectionner</option>
                                        <option value="6" selected="selected">Moins d'un mois</option>
                                        <option value="1">De 1 à 3 mois</option>
                                        <option value="2">De 3 à 6 mois</option>
                                        <option value="3">De 6 à 12 mois</option>
                                        <option value="4">De 12 à 24 mois</option>
                                        <option value="5">Plus de 24 mois</option>
                                </select>

                                </div>
                            </div>
                             
                            
                            <div class="off form-group" id="contratActuel">
                            <div class="col-lg-5" align="right">
                                <label class=" control-label"> Mon contrat d'assurance auto actuel a plus d'un an</label>
                                </div>
                                <div class="col-lg-7">

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_3">Oui<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_3" value="3" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Non<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="off form-group" id="moisEcheance">
                            <div class="col-lg-5" align="right">
                                <label class="control-label " >Le mois d’échéance de mon contrat actuel :</label>
                                </div>
                                <div class="col-lg-7">
                                   <select class="form-control uk-margin-bottom" name="moisEcheance" id="moisEcheance" >
                                       
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
                            </div>

                             <div class="form-group ">
                             <div class="col-lg-5" align="right">
                                    <label class="control-label ">Je souhaite que mon contrat débute le :</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input type="date" class="form-control uk-margin-bottom" name="dateEffet" id="dateEffet" value="" >
                                        <span class="off help-block" id="de">
                                        <strong>Merci d'indiquer la date d'effet de votre contrat</strong>
                                    </span>
                                    </div>
                                </div>

                            <div class="form-group">
                            <div class="col-lg-5" align="right">
                                <label class="control-label">Je souhaite le niveau de garanties :</label>
                                </div>
                                <div class="col-lg-7">

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Tiers Mini : Le minimum obligatoire (Responsabilité Civile)<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="3" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Tiers + : Le minimum obligatoire + au moins 2 garanties "Confort"<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Tiers ++ : Le minimum obligatoire + Bris de Glace<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Intermédiaire : Le minimum obligatoire + Bris de Glace + Incendie/Vol<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Tous risques : Intermédiaire + Dommages aux véhicules<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Tous risques + : Tous risques + au moins 2 garanties "Confort"<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>

                                    <div class="radio-inline">
                                        
                                        <label class="radio" for="1018_2">Tous risques ++ : Tous risques + au moins 4 garanties "Confort"<input type="radio" name="Civility" data-validation="RadioValidateur" id="1018_2" value="2" data-erreur-msg="Merci d'indiquer votre civilité"></label>
                                    </div>
                                </div>
                            </div>
                             

                </div>
              </div>
              
            </div>
        </div>
    </div>
	    </div>
		<div class="tab-pane" id="tab4">
			<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i>5. Mes coordonnées</h3>
                 </div>
              <div class="panel-body" style="background-color: #f5f5f5;padding:30px 0px;">
                <div class="row">
                  <div class="form-group">
                  <div class="col-lg-3" align="right">
                                <label class="control-label"> Civilité</label>
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
                            <div class="col-lg-3" align="right">
                 <label class="control-label ">Nom</label>
                 </div>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control uk-margin-bottom" name="nom" id="nom" value="" >
                                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-3" align="right">
                 <label class="control-label ">Prénom</label>
                 </div>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control uk-margin-bottom" name="prenom" id="prenom" value="" >
                                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-3" align="right">
                 <label class="control-label ">Adresse</label>
                 </div>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control uk-margin-bottom" name="adresse" id="adresse" value="" >
                                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-3" align="right">
                 <label class="control-label ">Code postal</label>
                 </div>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control uk-margin-bottom" name="codePostal" id="codePostal" value="" >
                                </div>
                </div>

                                 <div class="form-group">
                                 <div class="col-lg-3" align="right">
                                <label class="control-label ">Ville</label>
                                </div>
                                <div class="col-lg-7">
                                    <select class="form-control uk-margin-bottom" name="ville" id="ville" >
                                       <option selected="selected" value="-1">Ville</option>
                                       
                                   </select>

                               </div>
                                
                           </div>
                           <div class="form-group">
                           <div class="col-lg-3" align="right">
                 <label class="control-label ">Email</label>
                 </div>
                                <div class="col-lg-7">
                                    <input type="date" class="form-control uk-margin-bottom" name="email" id="email" value="" >
                                </div>
                </div>
                  <div class="form-group">
                  <div class="col-lg-3" align="right">
                 <label class="control-label ">Téléphone</label>
                 </div>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control uk-margin-bottom" name="tel" id="tel" value="" >
                                </div>
                </div>
                            <div align="center" style="padding-top:32px">
                <button class="arrondie  btn btn-primary " type="submit"  style="margin-top:12px"><h2 style="color:white"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
Je compare</br>et je crée mon devis</h2> </button>
              </div>
                          
                </div>
              </div>
             
            </div>
        </div>
    </div>
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



<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 $(document).ready(function () {
   
    $("#check1").on('change', function() {
           
             
            if($('#check1').prop('checked'))
            {
                
                document.getElementById("ch").className = 'off form-group';
                document.getElementById("ch1").className = 'off form-group';
                document.getElementById("ch2").className = 'off form-group';
                
              
                document.getElementById("ch6").className = 'off form-group';
                document.getElementById("ch7").className = 'off form-group';
                document.getElementById("ch8").className = 'off form-group';
                
                     
            }
            
         });
         $("#infraction").on('change', function() {
            if($('#infraction').val() == 2)
            {
                document.getElementById("1").className = 'on form-group';
                document.getElementById("2").className = 'on form-group';
               document.getElementById("annule").className = 'off form-group';       
            }if($('#infraction').val() == 3)
            {     
                document.getElementById("1").className = 'on form-group';
                document.getElementById("2").className = 'on form-group';
               document.getElementById("annule").className = 'off form-group';        
            }
            if($('#infraction').val() == 4)
            {   
                document.getElementById("1").className = 'on form-group';
                document.getElementById("2").className = 'off form-group';
                document.getElementById("annule").className = 'on form-group';       
            }
            if($('#infraction').val() == 1)
            {    
                document.getElementById("1").className = 'off form-group';
                document.getElementById("2").className = 'off form-group';
                document.getElementById("annule").className = 'off form-group';          
            }      
         });
         $("#usagePrevu").on('change', function() {
            if($('#usagePrevu').val() == 1)
            {
               
               document.getElementById("travail").className = 'off form-group';       
            }else{
                document.getElementById("travail").className = 'on form-group';
                     
            }      
         });
         $("#nonAssure").on('change', function() {
           
             
            if($('#nonAssure').prop('checked'))
            {
                
                document.getElementById("contratActuel").className = 'off form-group';
                document.getElementById("moisEcheance").className = 'off form-group';
               document.getElementById("vehiculeNonAssure").className = 'on form-group';
                
                     
            }else{
            	document.getElementById("contratActuel").className = 'on form-group';
                document.getElementById("moisEcheance").className = 'on form-group';
                 document.getElementById("vehiculeNonAssure").className = 'off form-group';
            }
            
         });
         $("#Assure").on('change', function() {
           
             
            if($('#Assure').prop('checked'))
            {
                
                document.getElementById("contratActuel").className = 'on form-group';
                document.getElementById("moisEcheance").className = 'on form-group';
               document.getElementById("vehiculeNonAssure").className = 'off form-group';
                
                     
            }else{
            	document.getElementById("contratActuel").className = 'off form-group';
                document.getElementById("moisEcheance").className = 'off form-group';
                 document.getElementById("vehiculeNonAssure").className = 'on form-group';
            }
            
         });

         $("#AssureTR").on('change', function() {
           
             
            if($('#AssureTR').prop('checked'))
            {
                
                document.getElementById("contratActuel").className = 'on form-group';
                document.getElementById("moisEcheance").className = 'on form-group';
               document.getElementById("vehiculeNonAssure").className = 'off form-group';
                
                     
            }else{
              document.getElementById("contratActuel").className = 'off form-group';
                document.getElementById("moisEcheance").className = 'off form-group';
                 document.getElementById("vehiculeNonAssure").className = 'on form-group';
            }
            
         });

         $("#AssureNG").on('change', function() {
           
             
            if($('#AssureNG').prop('checked'))
            {
                
                document.getElementById("contratActuel").className = 'on form-group';
                document.getElementById("moisEcheance").className = 'on form-group';
               document.getElementById("vehiculeNonAssure").className = 'off form-group';
                
                     
            }else{
              document.getElementById("contratActuel").className = 'off form-group';
                document.getElementById("moisEcheance").className = 'off form-group';
                 document.getElementById("vehiculeNonAssure").className = 'on form-group';
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
    $("#nombreSinistre").on('change', function() {
           
             
            if($('#nombreSinistre').val() == 1)
            {
                document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('premierSinistreConducteur').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'off form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'off form-group';
                document.getElementById('deuxiemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('troisiemeSinistre').className      = 'off form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'off form-group';
                document.getElementById('troisiemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistreConducteur').className    = 'off form-group';
                
                
                 
               
            }
            else if($('#nombreSinistre').val() == 2)
            {
                document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                 document.getElementById('premierSinistreConducteur').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                document.getElementById('deuxiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'off form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'off form-group';
                document.getElementById('troisiemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistreConducteur').className    = 'off form-group';
                 
               
            }
      else if($('#nombreSinistre').val() == 3)
            {
               document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                document.getElementById('premierSinistreConducteur').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                document.getElementById('deuxiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'on form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'on form-group';
                 document.getElementById('troisiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistreConducteur').className    = 'off form-group';
                 
               
            }
            else if($('#nombreSinistre').val() == 4)
            {
               document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                 document.getElementById('premierSinistreConducteur').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                 document.getElementById('deuxiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'on form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'on form-group';
                document.getElementById('troisiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('quatriemeSinistre').className      = 'on form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'on form-group';
                document.getElementById('quatriemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistreConducteur').className    = 'off form-group';
                 
               
            }else if($('#nombreSinistre').val() == 5)
            {
               document.getElementById('premierSinistre').className        = 'on form-group';
                document.getElementById('premierSinistreDate').className    = 'on form-group';
                 document.getElementById('premierSinistreConducteur').className    = 'on form-group';
                document.getElementById('deuxiemeSinistre').className       = 'on form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'on form-group';
                 document.getElementById('deuxiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('troisiemeSinistre').className      = 'on form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'on form-group';
                document.getElementById('troisiemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('quatriemeSinistre').className      = 'on form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'on form-group';
                document.getElementById('quatriemeSinistreConducteur').className    = 'on form-group';
                document.getElementById('cinquiemeSinistre').className      = 'on form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'on form-group';
                document.getElementById('cinquiemeSinistreConducteur').className    = 'on form-group';
                 
               
            }else{
                document.getElementById('premierSinistre').className        = 'off form-group';
                document.getElementById('premierSinistreDate').className    = 'off form-group';
                document.getElementById('premierSinistreConducteur').className    = 'off form-group';
                document.getElementById('deuxiemeSinistre').className       = 'off form-group';
                document.getElementById('deuxiemeSinistreDate').className   = 'off form-group';
                document.getElementById('deuxiemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('troisiemeSinistre').className      = 'off form-group';
                document.getElementById('troisiemeSinistreDate').className  = 'off form-group';
                document.getElementById('troisiemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('quatriemeSinistre').className      = 'off form-group';
                document.getElementById('quatriemeSinistreDate').className  = 'off form-group';
                document.getElementById('quatriemeSinistreConducteur').className    = 'off form-group';
                document.getElementById('cinquiemeSinistre').className      = 'off form-group';
                document.getElementById('cinquiemeSinistreDate').className  = 'off form-group';
                document.getElementById('cinquiemeSinistreConducteur').className    = 'off form-group';
      }
         });
         $("#actuellementAssure").on('change', function() {
           
             
            if($('#actuellementAssure').val() == 3)
            {
                
               document.getElementById("ch").className = 'off form-group';
               document.getElementById("ch1").className = 'off form-group';
               document.getElementById("ch2").className = 'off form-group';
                document.getElementById("ch6").className = 'off form-group';
                document.getElementById("ch7").className = 'off form-group';
                document.getElementById("ch8").className = 'off form-group';
                document.getElementById("ch9").className = 'off form-group';
                
            
                     
            }else{
                document.getElementById("ch").className = 'on form-group';
               document.getElementById("ch1").className = 'on form-group';
               document.getElementById("ch2").className = 'on form-group';
                document.getElementById("ch6").className = 'on form-group';
                document.getElementById("ch7").className = 'on form-group';
                document.getElementById("ch8").className = 'on form-group';
                document.getElementById("ch9").className = 'on form-group';
            }
            
         });

         $("#objetResiliation").on('change', function() {
           
             
            if($('#objetResiliation').val() == 1)
            {
                
               document.getElementById("ch9").className = 'off form-group';
    
            
                     
            }else{
                document.getElementById("ch9").className = 'on form-group';
               
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
          $('#codePostalNuit').blur(function(){

            var id      = 1;
           var codePostal  = $(this).val();
            //ar urlTaux = $("#urlTaux").val();
        
            $.ajax({
                url     : "{{ URL::to('recupererVille') }}",
                type    : 'POST',
                data    : {codePostal:codePostal}
            }).success(function(data){
              $("#villeNuit").html('<option value=""></option>');
        $.each(data, function(index, value) { // pour chaque noeud JSON
                // on ajoute l option dans la liste
                

                $("#villeNuit").append('<option value="'+ value +'">'+ index +'</option>');
            });

                
      

            }).error(function(){

                //$("#idtaux"+id).addClass('uk-form-danger');
        

            });
        // console.log($(this).attr("data-id") + "  " + $(this).val());


        });
           $('#codePostalTravail').blur(function(){

            var id      = 1;
           var codePostal  = $(this).val();
            //ar urlTaux = $("#urlTaux").val();
        
            $.ajax({
                url     : "{{ URL::to('recupererVille') }}",
                type    : 'POST',
                data    : {codePostal:codePostal}
            }).success(function(data){
              $("#villeTravail").html('<option value=""></option>');
        $.each(data, function(index, value) { // pour chaque noeud JSON
                // on ajoute l option dans la liste
                

                $("#villeTravail").append('<option value="'+ value +'">'+ index +'</option>');
            });

                
      

            }).error(function(){

                //$("#idtaux"+id).addClass('uk-form-danger');
        

            });
        // console.log($(this).attr("data-id") + "  " + $(this).val());


        });
    
     $("#tel").mask("99.99.99.99.99");
	$("#codePostal").mask("99999");
    $("#codePostalNuit").mask("99999");
    $("#codePostalTravail").mask("99999");
    $('#rootwizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
		//alert('on tab click disabled');
		return false;
	},onNext: function(tab, navigation, index) {

       if(index==1) {
        // Make sure we entered the name
        if(!$('#dateNaissance').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#dateNaissance').focus();
          document.getElementById('dn').className  = 'on help-block';
          return false;
        }
         
      }
            if(index==2) {
              if(!$('#dateAchatVehicule').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#dateAchatVehicule').focus();
          document.getElementById('da').className  = 'on help-block';
          return false;
        }
        // Make sure we entered the name
        if(!$('#codePostalNuit').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#codePostalNuit').focus();
          document.getElementById('cpn').className  = 'on help-block';
          document.getElementById('villeN').className  = 'on help-block';
          return false;
        }
        if(!$('#codePostalTravail').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#codePostalTravail').focus();
          document.getElementById('cpt').className  = 'on help-block';
          document.getElementById('villeT').className  = 'on help-block';
          return false;
        }
      }
       if(index==3) {
        // Make sure we entered the name
        if(!$('#dateEffet').val()) {
          //alert('Veuillez remplir tous les champs');
          $('#dateEffet').focus();
          document.getElementById('de').className  = 'on help-block';
          return false;
        }
      }
      }


});

    
});


	
</script>


@endSection
