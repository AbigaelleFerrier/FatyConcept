<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	switch ($_GET['table']) {
		case 'produit':
			$id = "id_prod";
			break;
		case 'couleur':
			$id = "id_couleur";
			break;

		case 'type_produit':
			$id = "id_type_prod";
			break;

		case 'type_taille':
			$id = "id_typeTaille";
			break;

		case 'taille':
			$id = "id_Taille";
			break;

		case 'typo':
			$id = "id_Typo";
			break;

		case 'categorie':
			$id = "id_categ";
			break;

		case 'sous_categ':
			$id = "id_sousCateg";
			break;
		
		default:
			$id = "ERREUR DE TABLE";
			break;
	}

	$req = "DELETE FROM  ".$_GET['table']." WHERE ". $id ." = ?";
	$traitement  = $connect ->prepare($req);
	$traitement -> bindParam(1, $_GET['id']);
	$traitement -> execute();

	$count = $traitement -> rowCount();

	if($count =='0'){
		var_dump($traitement);
	}
	else{
	    echo "OK";
	}
}
?>