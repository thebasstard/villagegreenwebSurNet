<!DOCTYPE html>
<html> 
	<head lang="fr">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?=base_url("bootstrap/css/bootstrap.css")?>" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="<?=base_url("css/vgsupprime.css")?>" rel="stylesheet">		
		<!-- <link href="css/vgsupprime.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>

		<img src="<?=base_url("images/Fond.png")?>" id="photo"/>

		<div class="container" id="fond">

			<div id="page">


					
							<div class="container">
								<div id="contenu" class="row fondcouleur1 form-group col-md-12 col-xs-12">	

									<h1 align="center"><strong>Ajouter un client</strong></h1>
										<form class = "vertical" role="form" method="POST" action="<?=site_url("vgclient/script_vgajout")?>">
											
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
												
												<input type="submit" id="Envoyer" class="btn btn-success" value="Enregistrer"/>
											</div>	
											<div class="form-group col-xs-2 text-center" id="retour">
					<a href="<?=base_url("index.php/vgclient/vgrecapitulatif")?>"><input type="button" class="btn btn-secondary" value="Retour au récapitulatif"></input></a>
				</div>				
										</form>	
								</div>
							</div>
			</div>
		</div>
	</body>
</html>