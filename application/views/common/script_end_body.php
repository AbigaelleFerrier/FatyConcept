<script type="text/javascript" src="<?php echo js_url('materialize.min');?>"></script>
<script type="text/javascript" src="<?php echo js_url('materialize');?>"></script>

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
            document.getElementById('pwdIns').style.color  = "#ff0000";
            document.getElementById('pwdIns2').style.color = "#ff0000";
        }
        else {
            document.getElementById('pwdIns').style.color  = "";
            document.getElementById('pwdIns2').style.color = "";
        }
      }


      var pssS  = 0;
      var pssS2 = 0;

      function passwordShow(obj) {
        if (obj == 0) {
          obj = document.getElementById('pwdIns');
          shw = document.getElementById('pswShow');
          if (pssS == 0) {
            obj.type = "text";
            shw.innerHTML = "lock_open";
            pssS = 1;
          }
          else {
            obj.type = "password";
            shw.innerHTML = "lock";
            pssS = 0;
          }
        }
        else {
          obj = document.getElementById('pwdIns2');
          shw = document.getElementById('pswShow2');
          if (pssS2 == 0) {
            obj.type = "text";
            shw.innerHTML = "lock_open";
            pssS2 = 1;
          }
          else {
            obj.type = "password";
            shw.innerHTML = "lock";
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

        var obj = new Object(),
            YousK2 = "TEST";

      	/* Form Select */
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, {dropdownOptions : obj });
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

        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.dropdown-trigger-nav');
          var instances = M.Dropdown.init(elems, {  hover           : true,
                                                    container       : 'test',
                                                    constrainWidth  : false,
                                                    closeOnClick    : false,
                                                    autoTrigger     : true,
                                                    coverTrigger    : false
                                                  });
        });

        /* Media */
        $(document).ready(function(){
          $('.materialboxed').materialbox();
        });




        /* Tabs */

        $(document).ready(function(){
          $('.tabs').tabs();
        });

        var instance  = M.Tabs.init(document.getElementById('tabs'),  _setupSwipeableTabs = true);
        var instanceA = M.Tabs.init(document.getElementById('tabsA'), _setupSwipeableTabs = true);


  // LETTRES ADHESIVES //

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

  /* PRODUIT */
        function affichePrixOnProduit(ref) {
            var xhr = new XMLHttpRequest();

            xhr.open("POST", "<?php echo base_url('Ajax/affichePrixOnProduit') ;?>", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function(){
                if (xhr.readyState == 4 && xhr.status == 200){
                    document.getElementById('zonePrix').innerHTML = xhr.responseText + " €";
                }
            };

            var radios  = document.getElementsByName('groupInverse') ;
            var inverse = -1;

            for (var i = 0, length = radios.length; i < length; i++) {
                if (radios[i].checked) {
                    inverse = (radios[i].value);
                }
            }

            xhr.send(   "taille="   + document.getElementById('taille').value +
                        "&qte="     + document.getElementById('qte').value    +
                        "&inverse=" + inverse
                    );
        }

        function afficheCouleurOnProduit(val) {
            var xhr = new XMLHttpRequest();

            xhr.open("POST", "<?php echo base_url('Ajax/afficheCouleurOnProduit') ;?>", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function(){
                if (xhr.readyState == 4 && xhr.status == 200){
                    document.getElementById('choixCouleurAffichage').style.background = xhr.responseText;
                }
            };
            xhr.send("refCouleur=" + val);
        }

        function addDown(val) {
          val = parseInt(document.getElementById('qte').value) + val;
          if (val >= 1) {document.getElementById('qte').value = val;}
          affichePrixOnProduit();
        }

</script>
