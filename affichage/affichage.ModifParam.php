<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM param";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
	$row = $traitement->fetch();
?>

	<div class="row">
		<div class="col s6">
			 <input id="adresse" type="text" data-length="50"	onblur="param(this.value, 0)"
			 													value="<?php echo($row['adresse']); ?>">
			 <label for="adresse">Adresse FatyConcept</label>	
		</div>
		<div class="col s6">
			 <input id="tel" type="text" data-length="50"	onblur="param(this.value, 1)"
			 												value="<?php echo($row['telephone']); ?>">
			 <label for="tel">Telephone FatyConcept</label>	
		</div>
		<div class="col s6">
			 <input id="mail" type="text" data-length="50"	onblur="param(this.value, 2)"
			 												value="<?php echo($row['mail']); ?>">
			 <label for="mail">Mail FatyConcept</label>	
		</div>
		<div class="col s6">
			 <input id="siret" type="text" data-length="50"	onblur="param(this.value, 3)"
			 												value="<?php echo($row['siret']); ?>">
			 <label for="siret">Siret FatyConcept</label>	
		</div>
		<div class="col s6">
			 <input id="ape" type="text" data-length="50"	onblur="param(this.value, 4)"
			 												value="<?php echo($row['ape']); ?>">
			 <label for="ape">Numéro Ape FatyConcept</label>	
		</div>
		<div class="col s6">
			 <input id="tva" type="text" data-length="50"	onblur="param(this.value, 5)"
			 												value="<?php echo($row['tva']); ?>">
			 <label for="tva">Numéro Tva FatyConcept</label>	
		</div>
	</div>

<?php
}
?>