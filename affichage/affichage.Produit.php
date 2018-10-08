<?php
	
	// On regarde le fichier
	$path = $_SERVER['PHP_SELF'];
	$file = basename ($path);


	// Si on est sur index on regarde ce que demande les parametres 
	if ($file == "index.php") {

		$reqParam	 = "SELECT * FROM param";
		$traitement  = $connect ->prepare($reqParam);
		$traitement -> execute();

		if ($rowParam = $traitement->fetch()) {
			if ($rowParam['listeProduitOuChoixProd'] == true) {
				$req = "SELECT * FROM produit WHERE affichageHome = 1 ORDER BY id_prod DESC";
				$traitement  = $connect ->prepare($req);
				$traitement -> execute();
			}
			else {
				$req = "SELECT * FROM produit ORDER BY id_prod DESC";
				$traitement  = $connect ->prepare($req);
				$traitement -> execute();
			}
		}
	}
	else if($file == "catalogue.php") {
		
		$req = "SELECT * FROM produit WHERE affichageHome = 1 ORDER BY id_prod DESC";
		$traitement  = $connect ->prepare($req);
		$traitement -> execute();
	}

	
	

	while($row = $traitement->fetch()) {
		echo '<div class="col s4">';
			echo '<a href="produit.php?ref='. $row['id_prod'] .'">';
				echo '<div class="card">';
				    echo '<div class="card-image">';
				    	echo '<img class="activator" src="img/produit/'. $row['image_prod'] .'">';
				        echo '<span class="card-title">'. $row['nom_prod'].'</span>';
				    echo '</div>';

			        echo '<div class="card-action">';
			        	echo '<a href="produit.php?ref='. $row['id_prod'] .'" class="waves-effect waves-light btn">Voir le produit</a>';
			        echo '</div>';
				echo '</div>';
			echo '</a>';

		echo '</div>';
	}

?>