<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	$_GET['val'] = str_replace("\n", "<br>", $_GET['val']);

	switch ($_GET['mdf']) {
		case 0:
			$req = "UPDATE param SET adresse = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();

			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 1:
			$req = "UPDATE param SET telephone = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;
		
		case 2:
			$req = "UPDATE param SET mail = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 3:
			$req = "UPDATE param SET siret = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 4:
			$req = "UPDATE param SET ape = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 5:
			$req = "UPDATE param SET tva = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
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