<script type="text/javascript" src="assets/js/materialize.min.js"></script>

<script type="text/javascript">
  // HOME
  
      function searchProduit() {
        if (document.getElementById('ctg').value != "") {
          var ctg = "&ctg=" + document.getElementById('ctg').value;
        }

        document.location.href= "catalogue.php?"+ ctg + "&motcle=" + encodeURIComponent(document.getElementById('motcle').value) + "&nomProduit=" + encodeURIComponent(document.getElementById('nom_produit').value) ;
      }

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
        
        xhr.onreadystatechange = function(){
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
              document.location.href="admin.php";
            }
            else if (xhr.responseText == "err01") {
              document.getElementById('outputErr').innerHTML = "Email ou mot de passe invalide";
            }

            else if (xhr.responseText == "OK1") {
              instanceConnexion.close();
              M.toast({html: 'Vous êtes deja connecté(e)'});
            }
            else {
              document.getElementById('outputErr').innerHTML = xhr.responseText;
            }
          }
        };
        xhr.send(); 
      }

      function inscriptionMDP() {
        vl1 = document.getElementById('pwdIns').value;
        vl2 = document.getElementById('pwdIns2').value;

        if (!(vl1 == "" || vl2 == "") && (vl1 != vl2)) {
          M.toast({html: 'Vos mots de passe ne sont pas identiques'});
        }
      }


      var pssS  = 0;
      var pssS2 = 0;

      function passwordShow(obj) {
        if (obj == 0) { 
          obj = document.getElementById('pwdIns');
          if (pssS == 0) {
            obj.type = "text";
            pssS = 1;
          }
          else {
            obj.type = "password";
            pssS = 0;
          }
        }
        else {
          obj = document.getElementById('pwdIns2');
          if (pssS2 == 0) {
            obj.type = "text";
            pssS2 = 1;
          }
          else {
            obj.type = "password";
            pssS2 = 0;
          }
        }


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

  // Obligatoire
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

        /* Character count */
        $(document).ready(function() {
          $('.countChar').characterCounter();
        });

        /* Colider */
        $(document).ready(function(){
          $('.collapsible').collapsible();
          
        });

        /* Dropdown */
        $(document).ready(function(){
          $(".dropdown-trigger").dropdown();
        });

        /* Media */
        $(document).ready(function(){
          $('.materialboxed').materialbox();
        }); 
        

        /* Tabs */
        var instance  = M.Tabs.init(document.getElementById('tabs'),  _setupSwipeableTabs = true);
        var instanceA = M.Tabs.init(document.getElementById('tabsA'), _setupSwipeableTabs = true);


  // LETTRES ADHESIVES //
    <?php
      $path = $_SERVER['PHP_SELF'];
      $file = basename ($path);

      if ($file == "lettres-adhesives.php") {
    ?>

      

        function afficheCouleurOnLA(val) {
          var xhr = new XMLHttpRequest(); 
          xhr.open("GET", "assets/php/ajax/afficheCouleurOnProduit.ajax.php?val="+ val);
          xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200){
              document.getElementById('LA').style.color = xhr.responseText;
            }
          };
          xhr.send(); 
        }

        function afficheTypoOnLA(val) {
          console.log(val);
          document.getElementById('LA').style.fontFamily = val;
        }

    <?php
    }
 
  /* PRODUIT */
    $path = $_SERVER['PHP_SELF'];
    $file = basename ($path);

    if ($file == "produit.php") {
      ?>
        

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
      <?php 
    } 

  
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
  
  // -- PRODUIT -- //

  function modifNomProduit(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNomProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Nom du produit modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }


  function modifDescProduit(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifDescProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Description du produit modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifMotCleProduit(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifMotCleProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Mot Clé du produit modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }
 
  function modifTypeProduit(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifTypeProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Type du produit modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifTypeTailleProduit(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifTypeTailleProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Type de la taille modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifInverProduit(id, value) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifInverProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Option Inverser du produit modifié'});
        }
        else {
          M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }

  function modifAfficheHomeProduit(id, value) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifAfficheHomeProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'L\'affichage du produit sur l\'accueil est modifié'});
        }
        else {
          M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }

  function modifActiverProduit(id, value) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifActiverProduit.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Le Produit est Activé/Désactivé'});
        }
        else {
          M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }

  function deleteSql(id, tableSql) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/delete.ajax.php?id="+ id + "&table="+ tableSql);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          document.location.href="admin.php";
        }
        else {
          M.toast({html: 'Erreur de suppresion ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }

  // -- Couleur -- //

  function modifNomCouleur(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNomCouleur.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Nom de la couleur modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifRefCouleur(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifRefCouleur.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Référence de la couleur modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifHexaCouleur(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifHexaCouleur.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Valeur Hexadecimal de la couleur modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifActiverCouleur(id, value) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifActiverCouleur.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'La couleur est Activé/Désactivé'});
        }
        else {
          M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }

  // -- TypeProd -- //

  function modifNomTypeProd(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNomTypeProd.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Nom du type de produit modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifNecCouleurTypeProd(id, value) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNecCouleurTypeProd.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Ce type de produit (ne nécessite plus / nécessite de la couleur'});
        }
        else {
          M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }


  // -- Tag -- //

  // function modifNomTag(id, value) {
  //   var xhr = new XMLHttpRequest();
  //   value = encodeURIComponent(value);

  //   xhr.open("GET", "assets/php/ajax/admin/modifNomTag.ajax.php?id="+ id + "&value="+ value);
      
  //   xhr.onreadystatechange = function(){
  //     if (xhr.readyState == 4 && xhr.status == 200){
  //       if (xhr.responseText == "OK") {
  //         M.toast({html: 'Nom du tag modifié'});
  //       }
  //       // else {
  //       //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
  //       // }
  //     }
  //   }
  //   xhr.send();
  // }

  // function deleteTag(id) {
  //   var xhr = new XMLHttpRequest();
  //   //value = encodeURIComponent(value);

  //   xhr.open("GET", "assets/php/ajax/admin/deleteTag.ajax.php?id="+ id);
      
  //   xhr.onreadystatechange = function(){
  //     if (xhr.readyState == 4 && xhr.status == 200){
  //       if (xhr.responseText == "OK") {
  //         document.location.href="admin.php";
  //       }
  //       else {
  //         M.toast({html: 'Erreur de suppresion ='+ xhr.responseText, displayLength : 100000});
  //       }
  //     }
  //   }
  //   xhr.send();
  // }

  // -- Type Taille -- //

  function modifNomTypeTaille(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNomTypeTaille.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Nom du type de taille modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  // -- Taille -- //
  function modifNomTaille(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNomTaille.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Nom de la     taille modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifPrixTaille(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifPrixTaille.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Prix de la taille modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifTypeTailleTaille(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifTypeTailleTaille.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Type de la taille modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }


  // -- Typo -- //
  function modifNomTypo(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifNomTypo.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Nom de la typo modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifLinkTypo(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifLinkTypo.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'Lien de la typo modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifCssTypo(id, value) {
    var xhr = new XMLHttpRequest();
    value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifCssTypo.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'CSS de la typo modifié'});
        }
        // else {
        //   M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        // }
      }
    }
    xhr.send();
  }

  function modifActiverTypo(id, value) {
    var xhr = new XMLHttpRequest();
    //value = encodeURIComponent(value);

    xhr.open("GET", "assets/php/ajax/admin/modifActiverTypo.ajax.php?id="+ id + "&value="+ value);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          M.toast({html: 'La typo est Activé/Désactivé'});
        }
        else {
          M.toast({html: 'Erreur de modification ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }


  // Quick save quick load 

  function quickModifAdmin(val) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "assets/php/ajax/admin/quickModifAdmin.ajax.php?val="+ val);
      
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200){
        if (xhr.responseText == "OK") {
          document.location.href="admin.php";
        }
        else {
          M.toast({html: 'Erreur ='+ xhr.responseText, displayLength : 100000});
        }
      }
    }
    xhr.send();
  }

  // Option 
    // footer
    function footer(val, mdf) {
      var xhr = new XMLHttpRequest();
      val = encodeURIComponent(val);
      xhr.open("GET", "assets/php/ajax/admin/footer.ajax.php?val="+ val + "&mdf="+ mdf);
        
      xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
          if (xhr.responseText == "OK") {
            M.toast({html: 'Modification prise en compte'});
          }
          else {
            M.toast({html: 'Erreur ='+ xhr.responseText, displayLength : 100000});
          }
        }
      }
      xhr.send();
    }
    
    function param(val, mdf) {
      var xhr = new XMLHttpRequest();
      val = encodeURIComponent(val);
      xhr.open("GET", "assets/php/ajax/admin/param.ajax.php?val="+ val + "&mdf="+ mdf);
        
      xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
          if (xhr.responseText == "OK") {
            M.toast({html: 'Modification prise en compte'});
          }
          else {
            M.toast({html: 'Erreur ='+ xhr.responseText, displayLength : 100000});
          }
        }
      }
      xhr.send();
    }
<?php
 }
?>


</script>