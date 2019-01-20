<?php 
session_start();
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['adresse'])) {
	
	if (isset($_POST['tel'])) { $tel = $_POST['tel']; }
	else 					 { $tel = "null";}

	try {
		include '../PDO.php';
		$req = "INSERT INTO `client` (	`id_prod`, 
										`nom_clt`, 
										`prenom_clt`,
										`email`,
										`password`,
										`adresse`,
										`telephone`) 

				VALUES 				(	NULL,
										?,
										?,
										?,
										?,
										?,
										?);";

		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['nom']);
		$traitement -> bindParam(2 , $_POST['prenom']);
		$traitement -> bindParam(3 , $_POST['email']);
		$traitement -> bindParam(4 , $_POST['mdp']);
		$traitement -> bindParam(5 , $_POST['adresse']);
		$traitement -> bindParam(6 , $tel);

		$traitement -> execute();

		$count = $traitement -> rowCount();

		if($count =='0'){
			header('Location:../../../../index.php?pb=cnt0"');
		}
		else{
		   	header('Location:../../../../index.php?co"');
		}
	}
	catch (PDOException $e) {
		header('Location:../../../../index.php?pb=dberr');
	}
}
else {
	header('Location:../../../../index.php?pb=vlerr');
}
?>, 