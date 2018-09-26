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

		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		

		<ul class="right hide-on-med-and-down">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="">Lorem</a></li>
			<li><a href="">Lorem</a></li>
			<li><a href="contact.php">Contact</a></li>

			<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>

			<!-- Recherche -->
			<li><a class="waves-effect waves-light btn btn-nav modal-trigger" href="#modal1">Recherche<i class="material-icons right">search</i></a></li>
		</ul>
	</div>

</nav>


<!-- Mobile -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="index.php">Accueil</a></li>
	<li><a href="">Lorem</a></li>
	<li><a href="">Lorem</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>


<!-- Script -->
<script type="text/javascript">

	$(document).ready(function(){
    	$(".dropdown-trigger").dropdown();
  	});

  	
</script>