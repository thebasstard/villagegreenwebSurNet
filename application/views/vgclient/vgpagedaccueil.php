<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link href="http://127.0.0.1/VillageGreenWeb/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="http://127.0.0.1/VillageGreenWeb/villagegreen.css" rel="stylesheet"> -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/villagegreen.css" rel="stylesheet">
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>

	<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Fond.png" id="photo"/>

	<div class="container">
		
		<div id="page">

			<div class="row">
				<div class="navbar navbar-default" id="navbar1">
					
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
										<label for="espaceclient" id="popover" data-placement="bottom">Espace client</a>
										
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
            									<button type="submit" id="login" class="btn btn-default"></button>
            								</div>
										  </form>
										</div>
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

			<div id="contenu" class="row fondcouleur1">								
							
				<div class="row ">
					<div class="col-md-12">
						
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>

							  
							  <div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/SlideArrivages.png" alt="Slide 1">
							      <div class="carousel-caption">
							        
							      </div>
							    </div>
							    <div class="item">
							      <img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/SlideNew.png" alt="Slide 2">
							      <div class="carousel-caption">
							        
							      </div>
							    </div>
							    <div class="item">
							      <img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/SlidePromo.png" alt="Slide 3">
							      <div class="carousel-caption">							        
							      </div>
							    </div>        
							  </div>

					
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						
					</div>
				</div>

				<br />

				<div>
					<h3 align="center"><strong>Meilleures ventes</strong></h3>
				</div>

				<br />				

				<div class="row">
					  <div class="col-xs-4 col-md-4">
					    <a href="#" class="thumbnail">
					      <img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Top1.png" alt="photo1">
					    </a>
					  </div>
						<div class="col-xs-4 col-md-4">
				    	<a href="#" class="thumbnail">
				     	 <img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Top2.png" alt="photo2">
				   	 	</a>
				  	</div>
				  	<div class="col-xs-4 col-md-4">
				    	<a href="#" class="thumbnail">
				     	 <img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Top3.png" alt="photo3">
				   	 	</a>
				  	</div>
				</div>
	
				<div class="row">					
					<div class="col-xs-6 col-md-6">	
						<h3 align="center"><strong>Partenaires</strong></h3>	
						<br />							
						<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Partenaires.png"/>
					</div>
					<div class="col-xs-6 col-md-6">
						<h3 align="center"><strong>Info livraisons</strong></h3>
						<br/>
						<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/InfoLivraisons.png"/>
					</div>
				</div>

			</div>
		
			<div class="row">
				<div class="navbar navbar-default" id="navbar2">
    				<div class="container-fluid">
						<div class="navbar-footer">
							
								<div class="col-xs-2 col-md-2" id="Paiements">
									<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/Paiements.png"/>
								</div>
								<div class="col-xs-1 col-md-1" id="cgv">
									<strong>C.G.V</strong>
								</div>
								<div class="col-xs-1 col-md-1" id="contact">
									<strong>Contact</strong>
								</div>
								<div class="col-xs-4 col-md-4" id="adresse">
									<strong>5 BD du Soleil 80000 Amiens</strong>
								</div>
								<div class="col-xs-2 col-md-2" id="ReseauxSociaux">
									<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/LogoTwitter.png" id="Twitter"/>																												
									<img src="http://dl.bienvu.net/ludod/VillageGreenWeb1/images/LogoFb.png" id="Facebook"/>
								</div>
							
						</div>	
					</div>
				</div>
			</div>	


		</div>
	</div>
	</body>
</html>

<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/pagedaccueil.js"></script>