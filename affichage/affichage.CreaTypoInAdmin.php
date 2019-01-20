<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12" action="assets/php/form/admin/typo.form.php" method="post">
    <div class="row">
        <div class="input-field col s4">
            <input id="nomTypo" name="nom" type="text" class="validate">
            <label for="nomTypo">Nom</label>
        </div>
        <div class="input-field col s4">
            <input id="linkTypo" name="link" type="text" class="validate">
            <label for="linkTypo">Lien GoogleFonts</label>
        </div>
        <div class="input-field col s4">
            <input id="cssTypo" name="css" type="text" class="validate">
            <label for="cssTypo">Classe CSS</label>
        </div>           
    </div>
    <div class="row">
        <button class="btn" type="submit">Créer</button>
    </div>
</form>

<?php } ?>