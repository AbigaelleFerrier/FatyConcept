<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12" action="assets/php/form/admin/typeTaille.form.php" method="post">
    <div class="row">
        <div class="input-field col s6">
            <input id="nomType" name="nom" type="text" class="validate">
            <label for="nomType">Nom</label>
        </div>        
    </div>
    
    <div class="row">
        <button class="btn" type="submit">Créer</button>
    </div>
</form>

<?php } ?>