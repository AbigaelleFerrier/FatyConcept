<script type="text/javascript" src="assets/js/materialize.min.js"></script>

<script type="text/javascript">
	
	/* Nav */
	$(document).ready(function(){
    	$('.sidenav').sidenav();
  	});

  	$(document).ready(function(){
    	$('.tooltipped').tooltip();
  	});

  	/* Modal */
  	$(document).ready(function(){
    	$('.modal').modal();
  	});

  	/* Form Select */
  	$(document).ready(function(){
	    $('select').formSelect();
	});

</script>

<?php include 'assets/php/modal_recherche.php' ?>