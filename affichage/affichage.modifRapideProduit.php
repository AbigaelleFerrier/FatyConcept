<?php 
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
?>
	<button class="btn waves-effect waves-light" onclick="quickModifAdmin(0)">Désactiver tous les produits</button>
	<button class="btn waves-effect waves-light" onclick="quickModifAdmin(1)">Activer tous les produits</button>
	<button class="btn waves-effect waves-light" onclick="quickModifAdmin(2)">Désactiver tous les produits affichés à l'accueil</button>

<?php
}
?>