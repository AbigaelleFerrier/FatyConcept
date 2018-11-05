<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12">
    <div class="row">
        <div class="input-field col s4">
            <input id="nomTypo" type="text" class="validate">
            <label for="nomTypo">Nom</label>
        </div>
        <div class="input-field col s4">
            <input id="linkTypo" type="text" class="validate">
            <label for="linkTypo">Lien GoogleFonts</label>
        </div>
        <div class="input-field col s4">
            <input id="cssTypo" type="text" class="validate">
            <label for="cssTypo">Classe CSS</label>
        </div>           
    </div>
</form>

<?php } ?>