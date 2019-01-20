<?php
	include '../PDO.php';

	if (isset($_GET['val']) && isset($_GET['qte']) && isset($_GET['recto'])) {
		$req = "SELECT * FROM taille WHERE id_Taille = ?";
		$traitement = $connect ->prepare($req);
		$traitement -> bindParam(1, $_GET['val']);
		$traitement -> execute();
		if ($row = $traitement->fetch()) {
			$row['prix_taille'] *= $_GET['qte'];
			if ($_GET['recto'] == 'true') {
				$row['prix_taille'] *= 2;	
			}
			echo $row['prix_taille'] . " €";
		}
		else {
			echo "01- Erreur Prix";
		}
	}
	else {
		echo "02- Erreur Prix";
	}
?>