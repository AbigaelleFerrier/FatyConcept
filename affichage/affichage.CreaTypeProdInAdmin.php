<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12" action="assets/php/form/admin/typeProduit.form.php" method="post">
    <div class="row">
        <div class="input-field col s6">
            <input id="nomTypeProd" type="text" name="nom" class="validate">
            <label for="nomTypeProd">Nom</label>
        </div>
        <div class="col s6">
            <p>
                <label>
                    <input name="couleurOuiNon" type="checkbox"/>
                    <span>Nécessite un choix de couleur de la part du client ?</span>
                </label>
            </p>
        </div>
        
    </div>
    <div class="row">
        <button class="btn" type="submit">Créer</button>
    </div>
</form>

<?php } ?>