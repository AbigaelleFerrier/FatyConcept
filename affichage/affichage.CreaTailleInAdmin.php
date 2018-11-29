<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12" action="assets/php/form/admin/taille.form.php" method="post">
    <div class="row">
        <div class="col s3">
            <select name="type">
                <?php
                    $req = "SELECT * FROM type_taille";
                    $traitement3  = $connect ->prepare($req);
                    $traitement3 -> execute();
                    
                    while ($row3 = $traitement3->fetch()) {
                        echo '<option value="'. $row3['id_typeTaille'] .'">'. $row3['nom_typeTaille'] .'</option>';
                    }
                ?>
            </select>
            <label>Taille</label>
        </div>
        <div class="input-field col s3">
            <input id="nomTaille" name="Taille" type="text" class="validate">
            <label for="nomTaille">Nom</label>
        </div>
        <div class="input-field col s3">
            <input id="prixTaille" name="prix" type="text" class="validate">
            <label for="prixTaille">Prix unitaire</label>
        </div>
        <div class="input-field col s3">
            <input id="poidTaille" name="poid" type="text" class="validate">
            <label for="poidTaille">Poid (en gramme)</label>
        </div>
              
    </div>
    
    <div class="row">
        <button class="btn" type="submit">Créer</button>
    </div>
</form>

<?php } ?>