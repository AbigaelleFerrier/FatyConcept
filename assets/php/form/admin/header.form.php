<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	var_dump($_POST);
	var_dump($_FILES);

	if ($_FILES['file']['error'] > 0) { header('Location:../../../../admin.php?ErreurDefichier'); }
	
	$nom = "../../../../img/header.jpg" ;
	$resultat = move_uploaded_file($_FILES['file']['tmp_name'],  $nom);
	if ($resultat) {
		header('Location:../../../../admin.php?Transfertreussi"');
	}
	else {
		//header('Location:../../../../admin.php?ErreurDefichier');
	}
}
?>