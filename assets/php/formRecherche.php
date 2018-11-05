<form class="col s12">
	<div class="row">
		<div class="input-field col s12 m6">
			<input placeholder="" id="nom_produit" type="text" class="validate">
			<label for="first_name">Nom de l'article :</label>
		</div>
		<div class="input-field col s12 m6">
			<select id="ctg">
				<option value="" disabled selected>Choisir une catégorie</option>
				<?php
				 	$req = "SELECT * FROM type_produit";
                    $traitement3  = $connect ->prepare($req);
                    $traitement3 -> execute();
                    
                    while ($row3 = $traitement3->fetch()) {
                        echo '<option value="'. $row3['id_type_prod'] .'">'. $row3['nom_type_produit'] .'</option>';
                    }
				?>
			</select>
			<label>Catégorie :</label>
		</div>
	</div>
<!-- 
	<div class="row">
		<div class="input-field col s12 m6">
			<input placeholder="" id="prix_produit" type="text" class="validate">
			<label for="first_name">Prix : (€)</label>
		</div>
		<div class="input-field col s12 m6">
			<select>
				<option value="1">Supérrieur ou égale à</option>
				<option value="2">Inférieur ou égale à</option>
			</select>
			
		</div>
	</div> -->

	<div class="row">
		<div class="input-field col s12">
			<input placeholder="exemple : crane / fleur / aigle / animaux / ..." id="motcle" type="text" class="validate" list="motcle" >
			<label for="first_name">Mot Clé :</label>
		</div>
	</div>
</form>