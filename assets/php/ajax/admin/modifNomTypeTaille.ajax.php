<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
	include '../../PDO.php';

	$req = "UPDATE type_taille SET nom_typeTaille = ? WHERE id_typeTaille = ?";
	$traitement  = $connect ->prepare($req);
	$traitement -> bindParam(1, $_GET['value']);
	$traitement -> bindParam(2, $_GET['id']);
	$traitement -> execute();
	$count = $traitement -> rowCount();

	if($count =='0'){
	    echo $traitement;
	}
	else{
	    echo "OK";
	}
}
?>