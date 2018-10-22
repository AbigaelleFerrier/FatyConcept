<?php
	//Si il est connecter
	if(isset($_SESSION['client'])) {

		echo'<li><a href="modication_profil.php">Mon Compte</a></li>';
		echo'<li><a href="deconnexion.php">Déconnexion</a></li>';

	}
	else if (isset($_SESSION['admin'])) {
		echo'<li><a href="admin.php">Mon Compte</a></li>';
		echo'<li><a href="deconnexion.php">Déconnexion</a></li>';
	}
	else {
		echo'<li><a href="#!" onclick="openModalConnexion();">Connexion / Inscription</a></li>';
	}
?>


