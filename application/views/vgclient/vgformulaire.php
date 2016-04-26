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
		<div class="container" id="fond">
		
			<div id="page">

				<div class="row">
					<div class="navbar navbar-default" id="navbar1">
						<!-- <div class="container-fluid"> -->
							<!-- <div class="navbar-header"> -->
							    <div class="row">
						    
								    <div class="col-xs-4 col-md-4">
								      	<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Logo.png" id="logo"/>
								    </div>
								    <div class="col-xs-4 col-md-4">
										<h1 class="panel-title" align="center" id="titre"><strong>VILLAGE GREEN</strong></h1>										
									</div>				
									
									<form class="col-xs-4 col-md-4 navbar-form navbar-left" role="search" id="search">
										<div class="form-group">
											<input type="text" class="form-control" name="recherche" placeholer="Recherche" id="recherche"/>						
										</div>
											<button type="submit" id="loupe" class="btn btn-default"></button>								
									</form>
									<div>
										<!-- <p id="EspaceClient" data-trigger="hover" data-container="body" data-toggle="popover" data-placement="bottom"  data-original-title="" title=""><strong>Espace client</strong></p> -->
										<label for="espaceclient" id="popover" data-placement="bottom" data-placement="bottom">Espace client</a>
										
										<div id="popover-content" class="hide">
										  <form>
										    <label for="email">Email</label>
            								<input type="email" name="email" id="email" class="form-control input-md">
            								<label for="password">Mot de passe</label>
            								<input type="password" name="password" id="password" class="form-control input-md">
            								<label for="oublie">Mot de passe oublié ?</label>
            								<label for="compte">Créer un compte</label>
										  </form>
										</div>
									</div>
																																									
								</div>								
							<!-- </div> -->
						<!-- </div> -->
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
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
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
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Dj</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Micros</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Effets</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Vents</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Instr.Trad</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			          <li class="divider"></li>
			          <li><a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			      <li class="dropdown col-xs-1 col-md-1"> <a href="#" id="drop" role="button" class="dropdown-toggle" data-toggle="dropdown"><strong>Accessoires</strong><b class="caret"></b></a>
			        <ul class="dropdown-menu" role="menu" aria-labelledby="drop">
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			          <li>
			          	<a tabindex="-1" href="#"></a>
			          </li>
			        </ul>
			      </li>
			    </ul>			    			      			    
			  </div>
			</div> 	

				

				<div class="row fondcouleur1">	
					<form class = "vertical" role="form" method="POST" action="<?=site_url("vgclient/script_vgformulaire")?>">
						<div class="form-group col-xs-2 text-center">
							<h4><strong>Enregistrement</strong></h4>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Nom *" name = "Nom" id = "Nom" class = "form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Prénom *" name="Prenom" id ="Prenom" class ="form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="email" placeholder="Email (adresse@email.com) *" name="Email" id = "Email" class ="form-control"/>
						</div>
						<div class="form-group col-xs-6">
							<input required type="text" placeholder="Adresse de facturation *" name="Facturation" id="Facturation" class="form-control">
						</div>
						<div class="form-group col-xs-6">
							<input type="text" placeholder="Adresse de livraison" name="Livraison" id="Livraison" class="form-control">
						</div>
						<div class="form-group col-xs-6">
							
							<select class ="form-control" name="Client" id="Client">
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