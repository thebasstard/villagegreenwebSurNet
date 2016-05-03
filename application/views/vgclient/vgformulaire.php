<!DOCTYPE html>
<html lang="fr">	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://dl.bienvu.net/ludod/VillageGreenWeb1/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="http://dl.bienvu.net/ludod/VillageGreenWeb1/css/VillageGreenFormulaire.css" rel="stylesheet">		
		<!-- <link href="VillageGreenFormulaire.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>

		<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Fond.png" id="photo"/>
		<div class="container">
		
			<div id="page">

				<div id="header">
					
						<div class="container-fluid">
						    
							    <div class="col-xs-2 col-md-2">
							      	<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Logo.png" id="logo"/>
							    </div>
							    <div class="col-xs-5 col-md-5">
									<h1 class="panel-title" align="center" id="titre"><strong>VILLAGE GREEN</strong></h1>										
								</div>				
								
								<!-- <form class="col-xs-5 col-md-5 navbar-form navbar-left" role="search" id="search">
									<div class="form-group">
										<input type="text" class="form-control" name="recherche" id="recherche"/>						
									</div>
										<button type="submit" id="loupe" class="btn btn-default"></button>								
								</form>			 -->					
        				
									<div class="row col-xs-12 col-md-12">	
										<div>
											<form class="col-xs-2 col-md-2 navbar-form navbar-left">
												<p class="navbar-btn" id="deconnexion">
				                    				<a href="<?=site_url("vgclient/vglogout")?>" class="btn btn-default">Déconnexion</a>
				                    				<span class="glyphicon glyphicon-lock"></span>
				                				</p>
			                				</form>
	                					</div>									
										<label for="espaceclient" class="col-xs-2 col-md-2" id="popover" data-placement="bottom">Espace client</label>
										
										<div id="popover-content" class="hide">
										  <form method="post" class="vertical">
										  	<div align="center">
										    	<label for="email">Email</label>
											</div>
											<div>
            									<input type="email" name="username" id="username" class="form-control input-md">
            								</div>
            								<div align="center">
            									<label for="password">Mot de passe</label>
            								</div>
            								<div>
            									<input type="password" name="password" id="password" class="form-control input-md">
            								</div>
            								<div>
            									<label for="oublie">Mot de passe oublié ?</label>
            								</div>
            								<div>
            									<label for="compte">Créer un compte</label>
            								</div>
            								<div align="center">
            									<button type="submit"id="login" class="btn btn-default"></button>
            								</div>           								
										  </form>
										</div>
									</div>
						</div>			
				</div>
			<div id="menu" class="navbar navbar-static">
			  <div class="navbar-inner">			    
			    <ul class="nav" role="navigation">
			        <li class="dropdown col-xs-1 col-md-1"> <a id="drop" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Gui/Bass</strong><b class="caret"></b></a>
				        <ul
				          class="dropdown-menu" role="menu" aria-labelledby="drop">
				            <li>
				            	<a tabindex="-1" href="http://google.com">Guitares</a>
				            </li>
				            <li>
				            	<a tabindex="-1" href="#anotherAction">Basses</a>
				            </li>
				            <li>
				            	<a tabindex="-1" href="#">Amplification</a>
				            </li>
				            <li class="divider"></li>
				            <li>
				            	<a tabindex="-1" href="#">Cordes</a>
				            </li>
				      	</ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Batteries</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#">Batteries acoustiques</a>
			          </li>
			          <li><a tabindex="-1" href="#">Batteries électroniques</a>
			          </li>
			          <li><a tabindex="-1" href="#">Cymbales</a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#">Baguettes</a>
			          </li>
			        </ul>
			      </li>			      
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Claviers</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#">Synthétiseurs</a>
			          </li>
			          <li><a tabindex="-1" href="#">Claviers MIDI</a>
			          </li>			          
			        </ul>
			      </li>		      
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Studio</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#">Enceintes de monitoring</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Logiciels</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Sono</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#">Enceintes</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Amplificateurs de puissance</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Dj</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#">Tables de mixage</a>
			          </li>
			          <li><a tabindex="-1" href="#">Platines</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Micros</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#">Microphones de chant</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Microphones pour instruments</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Effets</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#">Limiteurs</a>
			          </li>
			          <li><a tabindex="-1" href="#">Compresseurs</a>
			          </li>
			          <li><a tabindex="-1" href="#">Equalizers</a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#">Multi-effets</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Vents</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#">Flûtes</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Trompettes</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Saxophones</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Instr.Trad</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#">Instruments à cordes</a>
			          </li>
			          <li><a tabindex="-1" href="#">Instruments traditionnels et folkloriques</a>
			          </li>
			          <li><a tabindex="-1" href="#">Accordéons</a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Accessoires</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#">Pieds et supports</a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#">Accordeurs</a>
			          </li>
			        </ul>
			      </li>
			    </ul>			    			      			    
			  </div>
			</div> 	

				

				<div id="contenu" class="row fondcouleur1">	
					<form class = "vertical" role="form" method="POST" action="<?=site_url("vgclient/script_vgformulaire")?>">
						<div class="form-group col-xs-2 text-center">
							<h4><strong>Enregistrement</strong></h4>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Nom *" name = "Nom_Client" id = "Nom_Client" class = "form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Prénom *" name="Prenom_Client" id ="Prenom_Client" class ="form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="email" placeholder="Email (adresse@email.com) *" name="Authentif" id = "Authentif" class ="form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Adresse de facturation *" name="Adr_Factur" id="Adr_Factur" class="form-control">
						</div>
						<div class="form-group col-xs-6">
							<input type="text" placeholder="Adresse de livraison" name="Adr_Livr" id="Adr_Livr" class="form-control">
						</div>
						<div class="form-group col-xs-6">
							
							<select class ="form-control" name="Categorie" id="Categorie">
								<option value = "Type">Type de client</option>						
								<option value = "Professionnel">Professionnel</option>
								<option value = "Particulier">Particulier</option>
							</select>
						</div>
						<div class="form-group col-xs-2 text-center">
							<h4>* Mentions obligatoires</h4>
						</div>
						<div class="form-group col-xs-2 text-center">
							<input type="submit" id="Envoyer" class="btn" value=""/>
						</div>	
						<div class="form-group col-xs-2 text-center" id"retour">	
						<a href="http://dl.bienvu.net/ludod/VillageGreenWeb1"><input type="button" class="btn btn-secondary" value="Retour à la page d'accueil" ></input></a>
						</div>				
					</form>	

				</div>

			</div>	
				
		</div>
				
	</body>
</html>

<script src="http://dl.bienvu.net/ludod/VillageGreenWeb1/js/jquery.js"></script>
<!-- <script src="js/jquery.js"></script> -->
<script src="http://dl.bienvu.net/ludod/VillageGreenWeb1/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="js/bootstrap/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="http://dl.bienvu.net/ludod/VillageGreenWeb1/js/VillageGreenFormulaire.js"></script>
<!-- <script type="text/javascript" src="VillageGreenFormulaire.js"></script> -->
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="http://dl.bienvu.net/ludod/VillageGreenWeb1/js/pagedaccueil.js"></script>