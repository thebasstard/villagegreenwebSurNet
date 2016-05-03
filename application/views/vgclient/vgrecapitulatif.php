<!DOCTYPE html>
<html lang="fr">	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?=base_url("bootstrap/css/bootstrap.css")?>" rel="stylesheet">
		<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
		<link href="<?=base_url("css/vgrecapitulatif.css")?>" rel="stylesheet">
		<!-- <link href="css/vgrecapitulatif.css" rel="stylesheet"> -->
		<title>Village Green magasin de musique en ligne</title>
	</head>
	<body>
		<img src="<?=base_url("images/Fond.png")?>" id="photo"/>

		<div class="container" id="fond">
		
			<div id="page">
					
				<div class="row fondcouleur1">
					<p class="navbar-btn" id="deconnecom">
        				<a href="<?=site_url("vgclient/vglogout")?>" class="btn btn-default">Déconnexion</a>
        				<span class="glyphicon glyphicon-lock"></span>
                	</p>
					<h1 align="center"><strong>Récapitulatif client</strong></h1>
				
					<form class="vertical" role="form">	
											
						<table class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
							<thead>
								<tr id="tableau">
									<th>Nom</th>
						            <th>Prénom</th>
						            <th>Adresse de facturation</th>
						            <th>Adresse de livraison</th>
						            <th>Type de client</th>
						            <th>choix 1</th>
						            <th>choix 2</th>
								</tr>
							</thead>
							<?php foreach ($vgrecapitulatif->result() as $row): ?>							
							<tbody>
								<tr>
									<td><?php echo $row->Nom_Client; ?></td>
									<td><?php echo $row->Prenom_Client; ?></td>
									<td><?php echo $row->Adr_Factur; ?></td>
									<td><?php echo $row->Adr_Livr; ?></td>
									<td><?php echo $row->Categorie; ?></td>
													
													
									<td><a href="<?=site_url("vgclient/vgmodif/".$row->id)?>">Modifier</a></td>
													
									<td><a href="<?=site_url("vgclient/vgsupprime/".$row->id)?>">Supprimer</a></td>
								</tr>	
							</tbody>
							<?php endforeach; ?>				
						</table>	
						<p class="navbar-btn" align="center">
                    		<a href="<?=site_url("vgclient/vgajout")?>" class="btn btn-default">Ajouter</a>
                		</p>
					</form>
		
				</div>
			</div>
		</div>

	</body>
</html>


