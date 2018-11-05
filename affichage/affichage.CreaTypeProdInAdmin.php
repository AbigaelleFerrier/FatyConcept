<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
?>
<form class="col s12">
    <div class="row">
        <div class="input-field col s6">
            <input id="nomTypeProd" type="text" class="validate">
            <label for="nomTypeProd">Nom</label>
        </div>
        <div class="col s6">
            <p>
                <label>
                    <input type="checkbox"/>
                    <span>Nécessite un choix de couleur de la part du client ?</span>
                </label>
            </p>
        </div>
        
    </div>
</form>

<?php } ?>