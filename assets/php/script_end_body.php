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
    xhr.open("GET", "assets/php/ajax/connexion.ajax.php?email="+ 
      document.getElementById('email').value + "&pwd=" + 
      document.getElementById('pwd').value);
    
    console.log('a');

    xhr.onreadystatechange = function(){
      console.log('aZ');
      if (xhr.readyState == 4 && xhr.status == 200){
        if(xhr.responseText == "okC") {
          <?php 
            $path  = $_SERVER['PHP_SELF']; 
            $file  = basename ($path);
            
            if($file == 'produit.php') { 
              $file .= '?ref='. $_GET['ref'] . '&co=ok"';
            }
            else {
              $file .= '?co=ok"';  
            }
            
            echo 'document.location.href="'. $file ;
          ?>

            
        }
        else if (xhr.responseText == "okA") {
          console.log('c');
          document.location.href="admin.php";
        }
        else if (xhr.responseText == "err01") {
          console.log('d');
          document.getElementById('outputErr').innerHTML = "Email ou mot de passe invalide";
        }

        else if (xhr.responseText == "OK1") {
          console.log('e');
          instanceConnexion.close();
          M.toast({html: 'Vous êtes deja connecté(e)'});
        }
        else {
          console.log('f');
          document.getElementById('outputErr').innerHTML = xhr.responseText;
        }
      }
    };
    xhr.send(); 
  }


  function okCo() {
     M.toast({html: 'Vous êtes maintenant connecté(e)'});
  }
  function dCo() {
     M.toast({html: 'Vous êtes maintenant déconnecté(e)'});
  }

  <?php 
    if (isset($_GET['co']) && $_GET['co']=='ok' && (isset($_SESSION['client']) || isset($_SESSION['admin']))) {
      echo "okCo();";  
    }
    if (isset($_GET['co']) && $_GET['co']=='dc' && (!isset($_SESSION['client']) || !isset($_SESSION['admin']))) {
      echo "dCo();";  
    }
     
  ?>


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

    /* Tabs */
    var instance = M.Tabs.init(document.getElementById('tabs'), _setupSwipeableTabs = true);


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
            M.toast({html: 'err02'});
          }
          else if (xhr.responseText == "OK"){
            M.toast({html: 'Produit ajouter !'});
          }          
        }
      };
      xhr.send(); 
    }
<?php } ?>

</script>