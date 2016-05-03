<!DOCTYPE html>
<html lang="fr">	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?=base_url("bootstrap/css/bootstrap.css")?>" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="<?=base_url("css/vgmodif.css")?>" rel="stylesheet">		
		<!-- <link href="css/vgmodif.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>
		<img src="<?=base_url("images/Fond.png")?>" id="photo"/>
		<div class="container" id="fond">
		
			<div id="page">

				
		
		
			<div class="row fondcouleur1">
			
			<h1 align="center"><strong>Modifier la fiche client</strong></h1>
			<form class="vertical" action="<?= site_url("vgclient/script_vgmodif")?>" method="POST">				
					<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
	    				<thead>
					        <tr id="tableau">
					            <th>Nom</th>
					            <th>Prénom</th>
					            <th>Adresse de facturation</th>
					            <th>Adresse de livraison</th>
					            <th>Type de client</th>
					        </tr>
	    				</thead>
	    				<tbody>					      
					          <tr>
					           	 <td>
					           	 	<input type="text" name="Nom_Client" value="<?=($client->Nom_Client) ?>"/>
					           	 </td>
					           	 <td>
					           		<input type="text" name="Prenom_Client" value="<?= ($client->Prenom_Client) ?>" />
					           	</td>
					           	<!-- <?php echo "<td><input type='text' name='Prenom_Client' value='".$client->Prenom_Client."'/></td>\n"; ?>  //une autre manière d'afficher -->
					           	<td>
					           		<input type="text" name="Adr_Factur" value="<?= ($client->Adr_Factur) ?>" />
					           	</td>
					            <td>
					            	<input type="text" name="Adr_Livr" value="<?= ($client->Adr_Livr) ?>"/>
					            </td>
					            <td>
					            	<input type="text" name="Categorie" value="<?= ($client->Categorie) ?>"/>
					            </td>					            			                       
					          </tr>					      
					    </tbody>
					</table>			
					<input type="hidden" name="id" value="<?php echo $client->id; ?>"/> 		
					<div class="form-group col-xs-2 text-center">					
						<input type="submit" id="update" class="btn btn-primary" value="Modifier"/>									
					</div>
					<div class="form-group col-xs-2 text-center" id"retour">	
						<a href="<?=base_url("index.php/vgclient/vgrecapitulatif")?>"><input type="button" class="btn btn-secondary" value="Retour au récapitulatif" ></input></a>
					</div>
			</form>

			</div>   
		</div>
	</div>
	</body>
</html>

