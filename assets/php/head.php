<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="assets/css/materialize.php"  media="screen,projection"/>
<!-- <link type="text/css" rel="stylesheet" href="assets/css/nouislider.css"> -->

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

			echo '<title>'. $rowProd['nom_prod'] . ' - Faty Concept' .'</title>';
			echo '<meta name="keywords" 	content="'. $rowProd['motcle'] .'">';
			echo '<meta name="Description" 	content="'. $rowProd['desc_prod'] .'">';
	}
	else if ($file == "index.php") {
		echo '<title>Faty Concept</title>';
		echo '<meta name="keywords" 	content="">';
		echo '<meta name="Description" 	content="">';
	}
	else if ($file == "catalogue.php") {
		echo '<title>Catalogue - Faty Concept</title>';
		echo '<meta name="keywords" 	content="">';
		echo '<meta name="Description" 	content="">';
	}
	else if ($file == "lettres-adhesives.php") {
		echo '<title>Création de lettres adhesives - Faty Concept</title>';
		echo '<meta name="keywords" 	content="">';
		echo '<meta name="Description" 	content="">';

		$req = "SELECT * FROM typo";
		$traitementTypo = $connect ->prepare($req);
		$traitementTypo -> execute();

		while($row = $traitementTypo->fetch()) {
			echo($row['link_typo']);
		} 
	}
	else {
		echo '<title>'. str_replace ("-", " ", substr($file, 0, strlen($file)-4)).' - Faty Concept</title>';
	}
	