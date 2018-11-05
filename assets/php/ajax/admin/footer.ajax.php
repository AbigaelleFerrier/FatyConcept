<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	$_GET['val'] = str_replace("\n", "<br>", $_GET['val']);

	switch ($_GET['mdf']) {
		case -1:
			$req = "UPDATE footer SET champ1 = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();

			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 0:
			$req = "UPDATE footer SET nomLink1 = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();

			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 1:
			$req = "UPDATE footer SET link1 = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;
		
		case 2:
			$req = "UPDATE footer SET nomLink2 = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 3:
			$req = "UPDATE footer SET link2 = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 4:
			$req = "UPDATE footer SET nomLink3 = ?";
			$traitement  = $connect ->prepare($req);
			$traitement -> bindParam(1, $_GET['val']);
			$traitement -> execute();
			
			$count = $traitement -> rowCount();
			if($count =='0'){ var_dump($traitement); }
			else 			{ echo "OK"; 			 }
		break;

		case 5:
			$req = "UPDATE footer SET link3 = ?";
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