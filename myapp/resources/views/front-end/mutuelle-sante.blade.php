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
    'action' => 'SanteController@insertionSante','files' => true, 'id' => 'form', 'data-validate' => 'parsley'
]) !!}
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
			<li><a href="{{ url('/') }}">Acceuil</a></li>
				<li><a href="#">devis assurance</a></li>
				<li class="active"> mutuelle santé</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i>Vous êtes à la recherche d'une mutuelle santé adaptée à vos besoins ?</h3>
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

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-angle-right" aria-hidden="true"></i> 1. JE DÉCRIS MON BESOIN DE MUTUELLE</h3>
			     </div>
			  <div class="panel-body">
			    <div class="row">
			     <h6 style="margin-left:35px; color:#00abdb">JE CHOISIS MES NIVEAUX DE GARANTIES: </h6>
			    	<div class="col-md-3" align="center">

                      <h5>Soins Médicaux</h5>
			    	<input id="SoinsMedicaux" class="rating" type="number" name="soins" id="soins" value="{{ old('soins') }}">
					@if ($errors->has('soins'))
					<div class="has-error">
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('soins') }}</strong>
                                    </span>
                                    </div>
                                @endif
								</div>
					
			    	<div class="col-md-3" align="center">
                      <h5>Hospitalisation</h5>
			    	<input id="Hospitalisation" class="rating" type="number" name="hospitalisation" id="hospitalisation" value="{{ old('hospitalisation') }}">
					@if ($errors->has('hospitalisation'))
					<div class="has-error">
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('hospitalisation') }}</strong>
                                    </span>
                                    </div>
                                @endif
					</div>
			    	<div class="col-md-3" align="center">
                      <h5>Optique</h5>
			    	<input id="Optique" class="rating" type="number" name="optique" id="optique" value="{{ old('optique') }}">
					@if ($errors->has('optique'))
					<div class="has-error">
                                    <span class="help-block has-error">
                                        <strong>{{ $errors->first('optique') }}</strong>
                                    </span>
                                    </div>
                                @endif</div>
			    	<div class="col-md-3" align="center">
                      <h5>Dentaire</h5>
			    	<input id="Dentaire" class="rating" type="number" name="dentaire" id="dentaire" value="{{ old('dentaire') }}">
					@if ($errors->has('dentaire'))
					 <div class="has-error">
                                    <span class="help-block ">
                                        <strong>{{ $errors->first('dentaire') }}</strong>
                                    </span>
                                    </div>
                                @endif
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
						    <legend><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i> Moi</legend>
						    <div class="form-group">
						    <div class="col-lg-5" align="right">
							    <label class="control-label"> Civilité</label>
							    </div>
							    <div class="col-lg-7">

							    	<div class="radio-inline">
							    		
							    		<label class="radio" for="1018_3">M.<input type="radio" name="civilite" data-validation="RadioValidateur" id="1018_3" value="M" checked></label>
							    	</div>

							    	<div class="radio-inline">
							    		
							    		<label class="radio" for="1018_2">Mme<input type="radio" name="civilite" data-validation="RadioValidateur" id="1018_2" value="Mme" data-erreur-msg="Merci d'indiquer votre civilité"></label>
							    	</div>

							    	<div class="radio-inline">
							    		
							    		<label class="radio" for="1018_1">Mlle<input type="radio" name="civilite" data-validation="RadioValidateur" id="1018_1" value="Mlle" data-erreur-msg="Merci d'indiquer votre civilité"></label>
							    	</div>

							    </div>
							</div>
							 @if ($errors->has('nom'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
						    <div class="col-lg-5" align="right">
							    <label class="control-label " >Nom</label>
							    </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom " id="nom" name="nom" value="{{ old('nom') }}" data-required="true" data-trigger="change" data-notblank="true">
							    @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
								</div>
							</div>

						   @if ($errors->has('prenom'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
						   <div class="col-lg-5" align="right">
							    <label class="control-label">Prénom</label>
							    </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom " id="prenom" name="prenom" value="{{ old('prenom') }}" data-validation="TexteLibreValidateur" data-condition-reponse="{  'type': 'Nom'}" data-erreur-msg="Merci d'indiquer votre nom">
							     @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
								
								</div>
							</div>

							@if ($errors->has('adresse'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
							<div class="col-lg-5" align="right">
							    <label class="control-label ">Adresse</label>
							    </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom " name="adresse" id="adresse" value="{{ old('adresse') }}" >
									@if ($errors->has('adresse'))
                                    <span class="help-block warning">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
									
							    </div>
							</div>

							@if ($errors->has('codePostal'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
							<div class="col-lg-5" align="right">
							    <label class="control-label">Code postal</label>
							    </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom " name="codePostal" id="codePostal" value="{{ old('codePostal') }}">
									@if ($errors->has('codePostal'))
                                    <span class="help-block warning">
                                        <strong>{{ $errors->first('codePostal') }}</strong>
                                    </span>
                                @endif
							    </div>
							</div>

							@if ($errors->has('ville'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
							<div class="col-lg-5" align="right">
						        <label class="control-label "> Ville</label>
						        </div>
						        <div class="col-lg-7">
						        
						            <select class="form-control uk-margin-bottom " name="ville" id="ville" >
						            <option value=""></option>
						            @foreach($villes as $ville)
										 <option <?php echo (old('ville') == $ville->ville_id) ? 'selected' : ''; ?> value="{{$ville->ville_id}}">{{$ville->ville}}</option>
						                @endforeach
						            </select>
									@if ($errors->has('ville'))
                                    <span class="help-block warning">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
						        </div>
						    </div>

						    @if ($errors->has('email'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
						    <div class="col-lg-5" align="right">
							    <label class="control-label ">Email</label>
							    </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom " id="email" name="email" value="{{ old('email') }}" data-required="true" data-parsley-type="email" data-trigger="change">
									 @if ($errors->has('email'))
                                    <span class="help-block warning">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							    </div>
							</div>

							@if ($errors->has('tel'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
							<div class="col-lg-5" align="right">
							    <label class="control-label ">Téléphone</label>
							    </div>
							    <div class="col-lg-7">
							        <input type="text" class="form-control uk-margin-bottom " id="tel" name="tel" value="{{ old('tel') }}" >
									@if ($errors->has('tel'))
                                    <span class="help-block warning">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
							    </div>
							</div>

							@if ($errors->has('dateNaissance'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
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

							<!-- <div class="input-group date" data-provide="datepicker">
								<input type="text" class="datepicker form-control">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-th"></span>
								</div>
							</div> -->

							@if ($errors->has('profession'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
							<div class="col-lg-5" align="right">
						        <label class="control-label ">Profession</label>
						        </div>
						        <div class="col-lg-7">
						        	<select class="form-control uk-margin-bottom " name="profession" id="profession" >
						        		<option selected="selected" value="19">Sélectionner</option>
						        		@foreach($professions as $profession)
						        		<option <?php echo (old('profession') == $profession->id) ? 'selected' : ''; ?> value="{{$profession->id}}">{{$profession->libelle}}</option>
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
                                        <option <?php echo (old('secteurActivite') == $secteur->id) ? 'selected' : ''; ?>value="{{$secteur->id}}">{{$secteur->libelle}}</option>
                                        @endforeach
						        	</select>
									
						        </div>
						    </div>

						    @if ($errors->has('regime'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" >
						    @endif
						    <div class="col-lg-5" align="right">
						        <label class="control-label ">Régime</label>
						        </div>
						        <div class="col-lg-7">
						            <select class="form-control uk-margin-bottom " name="regime" id="regime" value="{{ old('regime') }}">
						            <option selected="selected" value="6">Sélectionner</option>
						            @foreach($regimes as $regime)
						        		<option <?php echo (old('regime') == $regime->id) ? 'selected' : ''; ?> value="{{$regime->id}}">{{$regime->libelle}}</option>
						        		@endforeach
						            </select>
									@if ($errors->has('regime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regime') }}</strong>
                                    </span>
                                @endif
						        </div>
						    </div>
						    
						   
						  </fieldset>
						
			      	</div>
			      	<div class="col-md-6 infos">
			      		 
			      		 <fieldset>
						    <legend><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i>  Mon Conjoint et Moi</legend>
						    <div class="form-group" >
						      <label class="radio-inline"><input type="radio" name="optradio" id="check1" checked>Moi</label>
								<label class="radio-inline"><input type="radio" name="optradio" id="check">Mon conjoint et moi</label>
						    </div>
						    <div class="off form-group" id="1">
						    <div class="col-lg-5" align="right">
							    <label class="control-label" >Date de naissance</label>
							    </div>
							    <div class="col-lg-7" id="datetimepicker1">
							        <input name="dateNaissanceConjoint" type='text' class="form-control uk-margin-bottom datepickerNaissance" id="dateNaissanceConjoint" placeholder="Date de naissance" />
							</div>

							<div class="off form-group" id="2">
							<div class="col-lg-5" align="right">
						        <label class="control-label "> Profession</label>
						        </div>
						        <div class="col-lg-7">
						            <select class="form-control uk-margin-bottom " name="professionC" id="professionC">
						                <option selected="selected" value="19">Sélectionner</option>
						        		@foreach($professions as $profession)
						        		<option <?php echo (old('professionC') == $profession->id) ? 'selected' : ''; ?> value="{{$profession->id}}">{{$profession->libelle}}</option>
						        		@endforeach
						            </select>
						        </div>
						    </div>

						    <div class="off form-group" id="3">
						    <div class="col-lg-5" align="right">
						        <label class="control-label"> Régime</label>
						        </div>
						        <div class="col-lg-7">
						            <select class="form-control uk-margin-bottom " name="regimeC" id="regimeC" >
						                <option selected="selected" value="6">Sélectionner</option>
						            @foreach($regimes as $regime)
						        		<option <?php echo (old('regimeC') == $regime->id) ? 'selected' : ''; ?> value="{{$regime->id}}">{{$regime->libelle}}</option>
						        		@endforeach
						            </select>
						        </div>
						    </div>
						    
						   
						    
						  </fieldset>

						  <hr>

						   <fieldset>
						    <legend><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i>  Mes Enfants</legend>
						    <div class="form-group">
						    <div class="col-lg-5" align="right">
						      <label class="control-label "> Nombre d'enfants</label>
						      </div>
						        <div class="col-lg-7">
						            <select class="form-control uk-margin-bottom " name="nombreEnfant" id="nombreEnfant" data-validation="SelectValidateur" data-erreur-msg="Merci d'indiquer votre ville : Nos assureurs partenaires proposent des contrats uniquement en France métropolitaine">
						                <option value="0">0</option>
						                <option value="1">1</option>
						                <option value="2">2</option>
						                <option value="3">3</option>
						            </select>
						        </div>
						    </div>
						    <div class="off form-group" id="premierEnfant">
						    <div class="col-lg-6" align="right">
							    <label class="control-label ">1er enfant né(e)</label>
							    </div>
							    <div class="col-lg-6" id='datetimepicker1'>
                   <input name="premierE" type='text' class="form-control uk-margin-bottom datepickerNaissance" id="premierE" placeholder="Date de naissance " />
							    </div>
							</div>
							<div class="off form-group" id="deuxiemeEnfant">
							<div class="col-lg-6" align="right">
							    <label class="control-label">2éme enfant né(e)</label>
							    </div>
							    <div class="col-lg-6" id='datetimepicker1'>
                   <input name="deuxiemeE" type='text' class="form-control uk-margin-bottom datepickerNaissance" id="deuxiemeE" placeholder="Date de naissance " />
							    </div>
							</div>
							<div class="off form-group" id="troisiemeEnfant">
							<div class="col-lg-6" align="right">
							    <label class="control-label ">3éme enfant né(e)</label>
							    </div>
							     <div class="col-lg-6" id='datetimepicker1'>
                   <input name="troisiemeE" type='text' class="form-control uk-margin-bottom datepickerNaissance" id="troisiemeE" placeholder="Date de naissance " />
              
							    </div>
							</div>
						    
						   
						    
						  </fieldset>

						  <hr>

						   <fieldset>
						   	<div class="form-group">
                					<div class="col-lg-5" align="right">
                                <label class="control-label"> J'ai déjà été assuré </label>
                                </div>
                                <div class="col-lg-7">
                                		<input type="text" hidden value="" id="dejaAssurer" name="dejaAssurer">
                                    <div class="form-group" >
						      <label class="radio-inline">Oui<input type="radio" name="dejaAssurer1" id="dejaAssurerOui" ></label>
								<label class="radio-inline">Non, jamais<input type="radio" name="dejaAssurer1" id="dejaAssurerNon" checked></label>
						    </div>
                                </div>
                            </div>
                             <div class="off form-group" id="AssureurActuelId">
                             <div class="col-lg-5" align="right">
                                <label class="control-label " >Mon assureur actuel :</label>
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
                            <div class="off form-group" id="PrimeContratActuelId">
                                
                                <div class="col-md-5" align="right">
                                <label class="control-label " >Prime de contrat actuel : </label>
                                </div>
                                <div class="col-md-7">
                                   <input type="text" class="form-control uk-margin-bottom" name="primeContratActuel" id="primeContratActuel" value="" >
                                </div>
                            </div>
						    <legend><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i> Mon Contrat</legend>

						    @if ($errors->has('dateEffet'))
						    <div class="form-group has-error" >
						    @else
						    <div class="form-group" > 
						    @endif
						    <div class="col-lg-5" align="right">
							    <label class="control-label ">Mon contrat doit commencer </label>
							    </div>
							    <div class="col-lg-7" id='datetimepicker1'>
                   <input name="dateEffet" type='text' class="form-control uk-margin-bottom datepicker" id="dateEffet" placeholder="Date debut contrat" value="{{ old('dateEffet') }}" />
              
							        @if ($errors->has('dateEffet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateEffet') }}</strong>
                                    </span>
                                @endif
							    </div>


							</div>
							
							 <div align="center" style="padding-top:32px">
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
<script>
jQuery(function($){
  $("#tel").mask("99-99-99-99-99");
});
</script>

@endSection

@section('javascripts')


{{ Html::script('/front-end/js/jquery.js') }}
{{ Html::script('/front-end/js/tipi.jquery.js') }}
{{ Html::script('/front-end/js/rating.jquery.js') }}
{{ Html::script('front-end/js/main.js') }} 
{{ Html::script('back-end/libs/bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}
{{ Html::script('back-end/libs/bower/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js') }}
{{ Html::script('/front-end/js/pickadate.js-3.5.6/lib/picker.js') }}
{{ Html::script('/front-end/js/pickadate.js-3.5.6/lib/picker.date.js') }}
{{ Html::script('/front-end/js/pickadate.js-3.5.6/lib/legacy.js') }}
{{ Html::script('/front-end/js/parsley/dist/parsley.js') }}
{{ Html::script('/front-end/js/maskedinput/src/jquery.maskedinput.js') }}




<script>

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  $(document).ready(function(){

//   	$('.datepicker').datepicker({
//     format: 'yyyy-mm-dd',
//     startDate: '-3d'
// });

	  
	$('.rating').rating({
	  color: '#00abdb',
      colorHover: '#dfb200',
	  messages:[
	    'Min',
	    'Éco',
	    'Classique',
	    'Intermidiaire',
	    'Élevé'
	  ],
	  value:[
	  '100',
	  '200',
	  '300',
	  '400',
	  '500'
	  ]
	});
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
	$("#check").on('change', function() {
           
             
            if($('#check').prop('checked'))
            {
                document.getElementById('1').className = 'on form-group';
                document.getElementById('2').className = 'on form-group';
                document.getElementById('3').className = 'on form-group';
                 
               
            }
            else
            {
                document.getElementById('1').className = 'off form-group';
                document.getElementById('2').className = 'off form-group';
                document.getElementById('3').className = 'off form-group';
                 
                
            }
         });
	$("#check1").on('change', function() {
           
             
            if($('#check1').prop('checked'))
            {
                document.getElementById('1').className = 'off form-group';
                document.getElementById('2').className = 'off form-group';
                document.getElementById('3').className = 'off form-group';
                     
            }
            else
            {
                document.getElementById('1').className = 'on form-group';
                document.getElementById('2').className = 'on form-group';
                document.getElementById('3').className = 'on form-group';

            }
         });

			$("#dejaAssurerOui").on('change', function() {
           
             
            if($('#dejaAssurerOui').prop('checked'))
            {
                document.getElementById('AssureurActuelId').className = 'on form-group';
                document.getElementById('PrimeContratActuelId').className = 'on form-group';
                document.getElementById('dejaAssurer').value='OUI';                       
            }
         });

			$("#dejaAssurerNon").on('change', function() {
           
             
            if($('#dejaAssurerNon').prop('checked'))
            {
                document.getElementById('AssureurActuelId').className = 'off form-group';
                document.getElementById('PrimeContratActuelId').className = 'off form-group';
                document.getElementById('dejaAssurer').value='NON';                       
            }
         });

		 	$("#nombreEnfant").on('change', function() {
           
             
            if($('#nombreEnfant').val() == 2)
            {
                document.getElementById('premierEnfant').className = 'on form-group';
                document.getElementById('deuxiemeEnfant').className = 'on form-group';
              	document.getElementById('troisiemeEnfant').className = 'off form-group';
                 
               
            }
            else if($('#nombreEnfant').val() == 1)
            {
                document.getElementById('premierEnfant').className = 'on form-group';
                document.getElementById('deuxiemeEnfant').className = 'off form-group';
              	document.getElementById('troisiemeEnfant').className = 'off form-group';
                 
               
            }
			else if($('#nombreEnfant').val() == 3)
            {
                document.getElementById('premierEnfant').className = 'on form-group';
                document.getElementById('deuxiemeEnfant').className = 'on form-group';
              	document.getElementById('troisiemeEnfant').className = 'on form-group';
                 
               
            }else{
				document.getElementById('premierEnfant').className = 'off form-group';
                document.getElementById('deuxiemeEnfant').className = 'off form-group';
              	document.getElementById('troisiemeEnfant').className = 'off form-group';
			}
         });

		 $("#tel").mask("99.99.99.99.99");
		 $("#codePostal").mask("99999");
		 $("#dateEffet").mask("9999-99-99");
		 $("#dateNaissance").mask("9999-99-99");
		 $("#dateNaissanceConjoint").mask("9999-99-99");

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
		     	$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
   


     
  });


	
</script>



@endSection