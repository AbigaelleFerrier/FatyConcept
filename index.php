<?php include 'assets/php/start.php'; ?>

<!DOCTYPE html>

<html>
	<head>
	    <?php include 'assets/php/head.php'; ?>
	</head>

	<body>
		<!-- Header -->
		<?php include 'assets/php/header.php'; ?>

		<!-- Nav -->
		<?php include 'assets/php/nav&modal.php'; ?>


		<!-- Main -->
		<div class="container">
			<div class="row">
			
			<?php include 'affichage/affichage.Produit.php'; ?>


			</div>
      	</div>


		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php 
			include 'assets/php/script_end_body.php';

			if (isset($_GET['err']) && $_GET['err']== 11) {
				echo '<script type="text/javascript">alert("Ce produit n\'est plus disponible ou à été retiré du catalogue ")</script>';
			}
		?>
		
	</body>
</html>
 