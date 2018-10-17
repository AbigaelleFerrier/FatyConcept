<?php 
	session_start();

	include 'assets/php/PDO.php';

	if (isset($_SESSION['pannier']) == FALSE) {
		# code...
	}
/*	
	$req = "SELECT * FROM adminroot";
	$traitement = $connect ->prepare($req);
	$traitement -> execute();


	while($row = $traitement->fetch()) {

		var_dump($row);
	} 

	Session [
		admin : ok // client : [ id ]

		pannier :
			produit [ idP , Qte , Couleur, Taille , option , typo]
			TT : prix

	]

*/

?>