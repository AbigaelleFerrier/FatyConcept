<div id="rechercheModal" class="modal">
	<div class="modal-content">
		<h4>Recherche</h4>

		<!-- FORM RECHERCHE -->
		<div class="row">
			<?php include 'assets/php/formRecherche.php';?>
		</div>
	</div>

	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat smallTxt">Fermer la recherche</a>
		<a href="#!" class="btn waves-effect waves-light">Recherche</a>
	</div>
</div>


<datalist id="modalTagRechercheList">
	<?php
		$req = "SELECT * FROM soustype";
		$traitementDatalist = $connect ->prepare($req);
		$traitementDatalist -> execute();
		while($row = $traitementDatalist->fetch()) {
			echo '<option value="'. $row['nom_tag'] .'">';	
		}
	?>
</datalist>


