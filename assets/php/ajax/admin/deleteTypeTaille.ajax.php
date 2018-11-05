<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	$req = "DELETE FROM type_taille WHERE id_typeTaille = ?";
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