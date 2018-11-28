<!-- NAV -->
    <nav class="nav-extended scrollspy row" role="navigation" id="nav">
    	<!-- <div class="col s2">
    		<a href="index.php">
	    		<img src="img/logo.svg" class="brand-logo">
    		</a>
    	</div> -->
    	
    	<div class="col s12">
    		<div class="container">
		        <div class="nav-wrapper container col s12">

		            <a id="logo-container" href="index.php" data-target="nav-mobile" class="brand-logo elephant">Faty Concept
		            </a>
		            <a href="#" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a> 

		            <ul class="right hide-on-med-and-down">
		                <?php include 'assets/php/navConnexion.php' ?>
		            </ul>         
		        </div>
		        <div class="nav-content  col s12">
		          	<ul class="tabs tabs-transparent hide-on-med-and-down">
		            	<?php include 'assets/php/linkNav.php'?>
		          	</ul>
		        </div>
	        </div>
	    </div>
    </nav>


<!-- Ancien nav 

	<nav>
		<div class="container nav-wrapper">
			<a href="#" class="brand-logo elephant">Faty Concept</a>

			<a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
			

			<ul class="right hide-on-med-and-down">
				
			</ul>
		</div>

	</nav> -->


<!-- Mobile -->
	<ul class="sidenav" id="nav-mobile">
	    <?php include 'linkNav.php'?>

	</ul>

<!-- Modal -->
	<?php include 'assets/php/modal/recherche.modal.php' ?>
	<?php include 'assets/php/modal/panier.modal.php' ?>
	<?php include 'assets/php/modal/connexion.modal.php' ?>