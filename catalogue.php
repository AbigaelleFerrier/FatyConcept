<?php include 'assets/php/start.php' ;?>

<!DOCTYPE html>

<html>
	<head>
	    <?php include 'assets/php/head.php'; ?>
	</head>

	<body>
		<!-- Nav -->
		<?php include 'assets/php/nav&modal.php'; ?>

		<!-- Main -->
		<div class="container" style="margin-top: 2em">
			<div class="row">
				<ul class="collapsible">
				 	<li>
				    	<div class="collapsible-header">
				      		<i class="material-icons">search</i>
				      			Recherche :
				      	</div>
					    <div class="collapsible-body">
					    	<div class="row">
					    		<?php include 'assets/php/formRecherche.php'; ?>	
					    	</div>
					    	<div>
					    		<a href="#!" class="btn waves-effect waves-light" onclick="searchProduit();">Recherche</a>
					    	</div>
					    </div>
				  	</li>
				</ul>
			</div>

			<div class="row">
				<?php include 'affichage/affichage.Produit.php'; ?>
			</div>
		</div>
		
		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php include 'assets/php/script_end_body.php'; ?>
	</body>
</html>
        