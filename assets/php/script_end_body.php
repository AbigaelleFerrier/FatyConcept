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

    /* Colider */
    $(document).ready(function(){
      $('.collapsible').collapsible();
      
    });

    /* Dropdown */
    $(document).ready(function(){
      $(".dropdown-trigger").dropdown();
    });



    /* PRODUIT */

    function affichePrixOnProduit() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "assets/php/ajax/affichePrixOnProduit.ajax.php?val="+ document.getElementById('taille').value + "&qte=" + document.getElementById('qte').value + "&recto="+ document.getElementById('rectoVerso').checked);
      xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
          document.getElementById('zonePrix').innerHTML = xhr.responseText;
        }
      };
      xhr.send();
    }

    function afficheCouleurOnProduit(val) {
      var xhr = new XMLHttpRequest(); 
      xhr.open("GET", "assets/php/ajax/afficheCouleurOnProduit.ajax.php?val="+ val);
      xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
          document.getElementById('choixCouleurAffichage').style.background = xhr.responseText;
        }
      };
      xhr.send(); 
    }

</script>

<?php include 'assets/php/modal_recherche.php' ?>