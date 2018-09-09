<?php
	session_start();

?>

<!DOCTYPE html>

<html>
	<head>
	    <?php include 'assets/php/head.php'; ?>
	</head>

	<body>
		<!-- Header -->
		<?php include 'assets/php/header.php'; ?>

		<!-- Nav -->
		<?php include 'assets/php/nav.php' ?>


		<!-- Main -->
		<div class="container">

			<div class="row">
			<?php
				for ($i=0; $i < 10 ; $i++) { 
			?>
			
				<div class="col s4">

					<div class="card">
					    <div class="card-image waves-effect waves-block waves-light">
					      <img class="activator" src="img/produit/cochon_fr.jpg">
					       <span class="card-title">cochon_fr</span>
					    </div>

					    <div class="card-content">
				          	<p>I am a very simple card. I am good at containing small bits of information.</p>
				        </div>

				        <div class="card-action">

				        	<div class="vote-zone tooltipped" data-position="bottom" data-tooltip="Note : 4.2/5">
				        		<i class="material-icons">star</i>
				        		<i class="material-icons">star</i>
				        		<i class="material-icons">star</i>
				        		<i class="material-icons">star_half</i>
				        		<i class="material-icons">star_border</i>
				        	</div>

				        	<a class="waves-effect waves-light btn">Voir le produit</a>
				        </div>

					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					</div>

				</div>

			<?php
				}
			?>
			</div>

      	</div>


		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php include 'assets/php/script_end_body.php'; ?>
	</body>
</html>
 