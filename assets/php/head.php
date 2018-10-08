<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="assets/css/main.css">
<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="assets/css/nouislider.css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<meta charset="utf-8">
<meta http-equiv="content-language" content="fr" />
<meta name="author" lang="fr" content="Asheart">

<!-- JS -->

<script type="text/javascript" href="assets/js/nouislider.js"></script>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
</script>


<?php
	$path = $_SERVER['PHP_SELF'];
	$file = basename ($path);

	if ($file == "produit.php") {

		// Référencement Produit //
		if (isset($_GET['ref'])) {
			$id_prod =$_GET['ref'];
		}
		else {
			header("Location: index.php?err=11");
		}



		$req = "SELECT * FROM produit WHERE id_prod = ?";
		$traitementProd = $connect ->prepare($req);
		$traitementProd -> bindParam(1, $id_prod);
		$traitementProd -> execute();



		$rowProd = $traitementProd->fetch();

			echo '<title>'. $rowProd['nom_prod'] .'</title>';
			echo '<meta name="keywords" 	content="'. $rowProd['motcle'] .'">';
			echo '<meta name="Description" 	content="'. $rowProd['desc_prod'] .'">';
	}
	