<?php
	//Si il est connecter
	if(isset($_SESSION['user'])) {

		echo'<li><a href="modication_profil.php">Mon Compte</a></li>';

	}
	else {
		echo'<li><a href="#!" onclick="openModalConnexion();">Connexion / Inscription</a></li>';
	}
?>


