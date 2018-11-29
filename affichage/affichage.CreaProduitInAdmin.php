<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>

<form class="col s12" action="assets/php/form/admin/produit.form.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
        <div class="input-field col s6">
            <input name="nomProduit" type="text" class="validate" required>
            <label for="nomProduit">Nom</label>
        </div>
        <div class="file-field input-field col s6">
            <div class="btn">
                <span>Image</span>
                <input name="file" type="file" required>
            </div>
            <div class="file-path-wrapper">
                <input name="file-path" class="file-path validate" type="text" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input class="countChar" data-length="255" name="desc" type="text" class="validate" required>
            <label for="desc">Description</label>
        </div> 
        <div class="input-field col s6">
            <input class="countChar" data-length="255" name="Mcl" type="text" class="validate" required>
            <label for="Mcl">Mot Clé</label>
        </div>
    </div>
    <div class="row">
        <div class="col s6">
            <select name="typeProd" required>
                <?php
                    $req = "SELECT * FROM type_produit";
                    $traitement3  = $connect ->prepare($req);
                    $traitement3 -> execute();
                    
                    while ($row3 = $traitement3->fetch()) {
                        echo '<option value="'. $row3['id_type_prod'] .'">'. $row3['nom_type_produit'] .'</option>';
                    }
                ?>
            </select>
            <label>Type de produit</label>
        </div>
        <div class="col s6">
            <select name="typeTaille" required>
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
    </div>
    <div class="row">
        <div class="col s4">
            <p>Categorie</p>
            <select multiple name="categorie[]">
                <?php
                    $req = "SELECT * FROM categorie";
                    $traitement = $connect ->prepare($req);
                    $traitement -> execute();

                    while($row = $traitement->fetch()) {
                        echo '<option value="'. $row['id_categ'].'">'. $row['nom_categ'] .'</option>';
                    } 
                ?>
            </select>
            <label>Categorie</label>
        </div>
        <div class="col s4">
            <p>Sous - Categorie</p>
            <select multiple name="sous_categ[]">
                <?php
                    $req = "SELECT * FROM sous_categ";
                    $traitement = $connect ->prepare($req);
                    $traitement -> execute();

                    while($row = $traitement->fetch()) {
                        echo '<option value="'. $row['id_sousCateg'].'">'. $row['nom_sousCateg'] .'</option>';
                    } 
                ?>
            </select>
            <label>Categorie</label>
        </div>
    </div>
    <div class="row">  
        <div class="col s3">
            <p>
                <label>
                    <input name="inverser" type="checkbox" />
                    <span>Inverser ?</span>
                </label>
            </p>
        </div>
        <div class="col s6">
            <p>
                <label>
                    <input name="accueilAff" type="checkbox" checked="checked" />
                    <span>Afficher sur la page d'accueil ?</span>
                </label>
            </p>
        </div>
    </div>

    <div class="row">
        <button class="btn" type="submit">Créer mon produit</button>
    </div>
</form>
    <div class="row">
        <div class="col s12">
            <hr><hr>
            <h4>- Voir les prix - </h4>
        </div>
        <div class="col s12">
            <?php include 'affichage/affichage.TailleInAdmin.php' ; ?>
        </div>
    </div>
    


<?php } ?>