<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="nomTag" type="text" class="validate">
            <label for="nomTag">Nom</label>
        </div>        
    </div>
    <div class="row">
        <button class="btn" type="submit">Créer</button>
    </div>
</form>

<?php } ?>