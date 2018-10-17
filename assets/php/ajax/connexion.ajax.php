<?php
	session_start();
	include '../PDO.php';

	if (!isset($_SESSION['client']) || !isset($_SESSION['admin'])) {
		
		$req = "SELECT id_clt FROM client WHERE email = ? AND password = MD5(?)";
		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_GET['email']);
		$traitement -> bindParam(2 , $_GET['pwd']);
		$traitement -> execute();

		if ($row = $traitement->fetch()) {
			$_SESSION['client'] = $row['id_clt'];
			echo "okC";
		}
		else {
			$req = "SELECT * FROM adminroot WHERE id_admin = MD5(?) AND cle_admin = MD5(?)";
			$traitement = $connect ->prepare($req);
			$traitement -> bindParam(1 , $_GET['email']);
			$traitement -> bindParam(2 , $_GET['pwd']);
			$traitement -> execute();

			if ($row = $traitement->fetch()) {
				$_SESSION['admin'] = "ok";
				echo "okA";
			}
			else {
				echo "err01";
			}			
		}

		/*
		if(isset($_GET['to'])){
			header('Location:' . $_GET['to']);
		}
		else {
			header('Location:index.php');
		}
		*/
	}
	else {
		echo "Vous êtes deja connecter ";
	}

?>