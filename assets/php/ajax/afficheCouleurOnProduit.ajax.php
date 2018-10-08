<?php
	include '../PDO.php';

	if (isset($_GET['val'])) {
		$req = "SELECT * FROM Couleur WHERE id_couleur = ?";
		$traitement = $connect ->prepare($req);
		$traitement -> bindParam(1, $_GET['val']);
		$traitement -> execute();
		if ($row = $traitement->fetch()) {
			echo $row['couleurHexa'];
		}
		else {
			echo "01- Erreur Couleur";
		}
	}
	else {
		echo "02- Erreur Couleur";
	}
	
?>