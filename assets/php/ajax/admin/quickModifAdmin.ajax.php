<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	switch ($_GET['val']) {
		case 0:
			$req = "UPDATE produit SET Activer = 0";
			$traitement  = $connect ->prepare($req);
			$traitement -> execute();

			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 1:
			$req = "UPDATE produit SET Activer = 1";
			$traitement  = $connect ->prepare($req);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;
		
		case 2:
			$req = "UPDATE produit SET affichageHome = 0";
			$traitement  = $connect ->prepare($req);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		default:
			echo "Valeur passer en paramettre invalide";
		break;
	}

}
?>