<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM footer";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
	$row = $traitement->fetch();
?>

	<div class="row">
		<h5>Champ de texte</h5>
		<div class="col s12">
			<textarea class="materialize-textarea" data-length="500" onblur="footer(this.value, -1)"><?php echo($row['champ1']); ?></textarea>
		</div>
	</div>
	<div class="row">
		<h5>Lien</h5>
		<div class="col s6">
			 <input id="nomLien1" type="text" data-length="50"	onblur="footer(this.value, 0)"
			 													value="<?php echo($row['nomLink1']); ?>">
			 <label for="nomLien1">Nom du Lien 1</label>	
		</div>
		<div class="col s6">
			 <input id="lien1" type="text" data-length="100"	onblur="footer(this.value, 1)"
			 													value="<?php echo($row['link1']); ?>">
			 <label for="lien1">Lien 1</label>	
		</div>

		<div class="col s6">
			 <input id="nomLien2" type="text" data-length="50"	onblur="footer(this.value, 2)"
			 													value="<?php echo($row['nomLink2']); ?>">
			 <label for="nomLien2">Nom du Lien 2</label>	
		</div>
		<div class="col s6">
			 <input id="lien2" type="text" data-length="100"	onblur="footer(this.value, 3)"
			 													value="<?php echo($row['link2']); ?>">
			 <label for="lien">Lien 2</label>	
		</div>

		<div class="col s6">
			 <input id="nomLien3" type="text" data-length="50"	onblur="footer(this.value, 4)"
			 													value="<?php echo($row['nomLink3']); ?>">
			 <label for="nomLien3">Nom du Lien 3</label>	
		</div>
		<div class="col s6">
			 <input id="lien3" type="text" data-length="100"	onblur="footer(this.value, 5)"
			 													value="<?php echo($row['link3']); ?>">
			 <label for="lien3">Lien 3</label>	
		</div>
	</div>


<?php
}
?>