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
<nav>
	<div class="container nav-wrapper">
		<a href="#" class="brand-logo elephant">Faty Concept</a>

		<a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
		

		<ul class="right hide-on-med-and-down">
			<?php include 'assets/php/linkNav.php'?>
		</ul>
	</div>

</nav>


<!-- Mobile -->
<ul class="sidenav" id="mobile-demo">
    <?php include 'linkNav.php'?>
</ul>

<!-- Modal -->

<?php include 'assets/php/modal_recherche.php' ?>
<?php include 'assets/php/modal_panier.php' ?>