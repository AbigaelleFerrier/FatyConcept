<!-- Structure Sous-Nav -->
	<ul id="dropdown1" class="dropdown-content" style="width: auto !important;">
	  	<div class="row">
	  		<div class="col s6">
	  			<li><a href="">Lorem</a></li>
				<li><a href="">Lorem</a></li>
				<li><a href="">Lorem</a></li>
				<li><a href="">Lorem</a></li>
	  		</div>
	  		<div class="col s6">
	  			<li><a href="">Lorem Helloeeeeeeee</a></li> 
				<li><a href="">Lorem</a></li>
				<li><a href="">Lorem</a></li>
				<li><a href="">Lorem</a></li>
	  		</div>	
	  	</div>
	</ul>

<!-- NAV -->
    <nav class="nav-extended scrollspy" role="navigation" id="nav">

        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" data-target="nav-mobile" class="brand-logo elephant">Faty Concept</a>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a> 

            <ul class="right hide-on-med-and-down">
                <?php include 'assets/php/navConnexion.php' ?>
            </ul>
            
        </div>

        <div class="nav-content container center ">
          	<ul class="tabs tabs-transparent hide-on-med-and-down">
            	<?php include 'assets/php/linkNav.php'?>
          	</ul>
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