<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12" method="post" action="assets/php/form/admin/couleur.form.php" >
    <a href="https://www.google.fr/search?q=%23101010&cad=h" target="_blank">Palette pour les valeur Hexadecimal</a>
    <div class="row">
        <div class="input-field col s4">
            <input id="nomCouleur" name="nom" type="text" class="validate">
            <label for="nomCouleur">Nom</label>
        </div>
        <div class="input-field col s4">
            <input id="ferCouleur" name="ref" type="text" class="validate">
            <label for="ferCouleur">Référence couleur</label>
        </div>
        <div class="input-field col s4">
            <input id="hexa" name="hexa" type="text" class="validate" value="#">
            <label for="hexa">Valeur hexadecimal</label>
        </div>
    </div>
    
    <div class="row">
        <button class="btn" type="submit">Créer</button>
    </div>
</form>

<?php } ?>