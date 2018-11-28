<?php
try {

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
		if (isset($_GET['motcle'])) 	{	$motcle 	= '%'. $_GET['motcle'] .'%';	}
		else 							{	$motcle 	= "%";							}
		if (isset($_GET['nomProduit'])) {	$nomProduit = '%'. $_GET['nomProduit'] .'%';}
		else 							{	$nomProduit = "%";							}

		$req = "SELECT * 	FROM 	`produit` 
							WHERE ( `desc_prod` 		LIKE ? 
							OR 		`motcle` 			LIKE ? ) 
							AND 	`nom_prod`			LIKE ?";

		if (isset($_GET['ctg'])) {
			$req .= "		AND 	`id_type_prod`		= ?
							AND 	`Activer` 			= 1 
							ORDER BY id_prod DESC";

			$traitement  = $connect ->prepare($req);

			$traitement -> bindParam(1, $motcle);
			$traitement -> bindParam(2, $motcle);
			$traitement -> bindParam(3, $nomProduit);
			$traitement -> bindParam(4, $_GET['ctg']);

		}
		else {
			$req .= "		AND 	`Activer` 			= 1 
							ORDER BY id_prod DESC";

			$traitement  = $connect ->prepare($req);

			$traitement -> bindParam(1, $motcle);
			$traitement -> bindParam(2, $motcle);
			$traitement -> bindParam(3, $nomProduit);
		}		
		$traitement -> execute();

	}

	
	
	$i = 1;

		// if($i == 1) {
		// 	echo '<div class="row">';
		// }

		// if($i == 3) {
		// 	echo '</div>';
		// }
		// if ($i == 3) {$i=1;}
		// else { $i++;}

	// if($i != 3) {
	// 	echo '</div>';
	// }
	// echo '</div>';

	while($row = $traitement->fetch()) {
		echo '<div class="col l4 m4 s6">';
			echo '<a href="produit.php?ref='. $row['id_prod'] .'">';
				echo '<div class="card">';
				    echo '<div class="card-image">';
				    /**/echo '<img class="activator" src="img/produit/'. $row['image_prod'] .'">';
				    /**/echo '<span class="card-title">'. $row['nom_prod'].'</span>';
				    echo '</div>';

			        echo '<div class="card-action">';
			        /**/echo '<a href="produit.php?ref='. $row['id_prod'] .'" class="waves-effect waves-light btn">Voir le produit</a>';
			        echo '</div>';
				echo '</div>';
			echo '</a>';

		echo '</div>';
	}
	
}
catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}
?>