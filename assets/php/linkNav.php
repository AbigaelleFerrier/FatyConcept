	<!-- Mobile -->
	<div class="hide-on-large-only show-on-medium-and-down">
		<?php include 'assets/php/navConnexion.php'?>
		<hr>
	</div>


	<li><a href="index.php">Accueil</a></li>
	<li><a href="catalogue.php">Catalogue</a></li>
	<li><a href="lettres-adhesives.php">Lettrage adhésif</a></li>
	<li><a href="contact.php">Contact</a></li>

	<!-- Mobile -->
	<div class="hide-on-large-only show-on-medium-and-down">
		
		<hr>
		<?php 
			$path = $_SERVER['PHP_SELF'];
			$file = basename ($path);
			if ($file != "catalogue.php") {
				echo '<!-- Recherche -->
			<li class=""><a class="modal-trigger" href="#rechercheModal">Recherche <i class="material-icons right">search</i></a></li>';
			}
			
		?>
		<!-- Pannier -->
		<li class=""><a class="modal-trigger" href="#panierModal">Panier <i class="material-icons right">local_grocery_store</i></a></li>
	</div>

	<!-- Ordi -->
	<div class="hide-on-med-and-down show-on-large iUP">
		<?php 
			if ($file != "catalogue.php") {
				echo  '
				<!-- Recherche -->
				<li class="right"><a class="modal-trigger" href="#rechercheModal"><i class="material-icons right">search</i></a></li>';
			}
		?>
		<!-- Pannier -->
		<li class="right"><a class="modal-trigger" href="#panierModal"><div></div><i class="material-icons right">local_grocery_store</i></a></li>
	</div>