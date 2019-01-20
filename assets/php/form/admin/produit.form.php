<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	var_dump($_POST);
	var_dump($_FILES);

	if ($_FILES['file']['error'] > 0) { header('Location:../../../../admin.php?ErreurDefichier'); }
	if (isset($_POST['inverser'])) 	   { $inv = 1;	}
	else 							   { $inv = 0;  }
	if (isset($_POST['accueilAff']))   { $acf = 1;	}
	else 							   { $acf = 0;  }


	try {
		include '../../PDO.php';

		$req = "INSERT INTO `produit` (	`id_prod`, 
										`nom_prod`, 
										`desc_prod`,
										`motcle`,
										`image_prod`,
										`inverser`,
										`id_type_prod`,
										`id_typeTaille`,
										`affichageHome`,
										`Activer`) 

				VALUES 				(	NULL,
										?,
										?,
										?,
										?,
										?,
										?,
										?,
										?,
										1);";

		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['nomProduit']);
		$traitement -> bindParam(2 , $_POST['desc']);
		$traitement -> bindParam(3 , $_POST['Mcl']);
		$traitement -> bindParam(4 , $_POST['file-path']);
		$traitement -> bindParam(5 , $inv);
		$traitement -> bindParam(6 , $_POST['typeProd']);
		$traitement -> bindParam(7 , $_POST['typeTaille']);
		$traitement -> bindParam(8 , $acf);

		$traitement -> execute();
		
		$req 		= "SELECT MAX(`id_prod`) FROM `produit`";
		$traitement = $connect ->prepare($req);
		$traitement -> execute();
		$row 		= $traitement->fetch();
		$idProduit 	= $row[0];

		var_dump($idProduit);
		
		foreach ($_POST['categorie'] as $value) {
			$req = "INSERT INTO `produit_categ` (`id_categ`, `id_prod`) VALUES (?, ?);";
			$traitement = $connect ->prepare($req);
			$traitement -> bindParam(1 , $value);
			$traitement -> bindParam(2 , $idProduit);
			$traitement -> execute();
		}

		foreach ($_POST['sous_categ'] as $value) {
			$req = "INSERT INTO `produit_sous_categ` (`id_souscateg`, `id_prod`) VALUES (?, ?);";
			$traitement = $connect ->prepare($req);
			$traitement -> bindParam(1 , $value);
			$traitement -> bindParam(2 , $idProduit);
			$traitement -> execute();
		}



		$nom = "../../../../img/produit/" . $_POST['file-path'];
		$resultat = move_uploaded_file($_FILES['file']['tmp_name'],  $nom);
		if ($resultat) {
			header('Location:../../../../admin.php?Transfertreussi"');
		}

	}
	catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}


}
?>