<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	if ($_GET['value'] === 'true') {
		$value = 1;
	}
	else {
		$value = 0;
	}

	$req = "UPDATE produit SET Activer = ? WHERE id_prod = ?";
	$traitement  = $connect ->prepare($req);
	$traitement -> bindParam(1, $value);
	$traitement -> bindParam(2, $_GET['id']);
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