<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="nomType" type="text" class="validate">
            <label for="nomType">Nom</label>
        </div>        
    </div>
</form>

<?php } ?>