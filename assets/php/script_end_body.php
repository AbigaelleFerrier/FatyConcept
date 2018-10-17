<script type="text/javascript" src="assets/js/materialize.min.js"></script>

<script type="text/javascript">
  
	/* Connexion */
  function openModalConnexion() {
    var docModal = document.getElementById('connexionModal');
    var instanceConnexion = M.Modal.getInstance(docModal);
    instanceConnexion.open();
  }

  function connexion() {
    var docModal = document.getElementById('connexionModal');
    var instanceConnexion = M.Modal.getInstance(docModal);

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "assets/php/ajax/connexion.ajax.php?email="+ document.getElementById('email').value + "&pwd=" + document.getElementById('pwd').value);
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if(xhr.responseText == "okC") {
          instanceConnexion.close();
          M.toast({html: 'Connexion réussi'});
        }
        else if (xhr.responseText == "okA") {
          instanceConnexion.close();
          M.toast({html: 'Connexion ADMIN réussi'});
        }
        else if (xhr.responseText == "err01") {
          document.getElementById('outputErr').innerHTML = "Email ou mot de passe invalide";
        }

        else if (xhr.responseText == "OK1") {
          instanceConnexion.close();
          M.toast({html: 'Vous êtes deja connecter'});
        }
        else {
          document.getElementById('outputErr').innerHTML = xhr.responseText;
        }
      }
    };
    xhr.send(); 
  }


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


<?php
  $path = $_SERVER['PHP_SELF'];
  $file = basename ($path);

  if ($file == "produit.php") {
?>
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

    function addDown(val) {
      val = parseInt(document.getElementById('qte').value) + val;
      if (val >= 1) {document.getElementById('qte').value = val;}
      affichePrixOnProduit();
    }

    function ajoutModifPanier() {
      var xhr = new XMLHttpRequest();

      var link =  "assets/php/ajax/ajoutModifPanier.ajax.php?";
          link += "idP="  + <?php echo $_GET["ref"]; ?>;
          link += "&qte=" + document.getElementById('qte').value;
          
          if (document.getElementById('couleur')) {
            link += "&couleur=" + document.getElementById('couleur').value;
          }
          if (document.getElementById('taille')) {
            link += "&taille=" + document.getElementById('taille').value;
          }
          if (document.getElementById('option')) {
            if (document.getElementById('auccun').value) {
              link += "&option=nA";
            }
            else if (document.getElementById('inverse').value) {
              link += "&option=inv";
            }
            else if (document.getElementById('rectoVerso').value) {
              link += "option=RV";
            }
            else {
              link += "option=err";
            }
          }
          


      xhr.open("GET", link);
      xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
          if (xhr.responseText == "err01") { /*connexion erreur*/
            var docModal = document.getElementById('connexionModal');
            var instanceConnexion = M.Modal.getInstance(docModal);
            instanceConnexion.open();
          }
          else if (xhr.responseText == "err02") {

          }
          else {
            M.toast({html: 'Produit ajouter !'});
          }          
        }
      };
      xhr.send(); 
    }
<?php } ?>

</script>