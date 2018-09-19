<div id="modal1" class="modal">
	<div class="modal-content">
		<h4>Recherche</h4>

		<!-- FORM RECHERCHE -->
		<div class="row">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12 m6">
						<input placeholder="" id="nom_produit" type="text" class="validate">
						<label for="first_name">Nom de l'article :</label>
					</div>
					<div class="input-field col s12 m6">
						<select>
							<option value="" disabled selected>Choisir une catégorie</option>
							<option value="1">Stickers</option>
							<option value="2">Broderie</option>
							<option value="3">Lettrerie</option>
						</select>
						<label>Catégorie :</label>
					</div>
				</div>

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
				</div>

				<div class="row">
					<div class="input-field col s12 m3">
						<input placeholder="" id="tag_produit" type="text" class="validate" list="modalTagRechercheList" >
						<label for="first_name">Tag :</label>
					</div>
					
					<div id="modalTagRecherche" class="col s12 m9 valign-wrapper">
						<div class="btn btnTagRecherche">Harley</div>
						<div class="btn btnTagRecherche">Moto 	</div>
						<div class="btn btnTagRecherche">Custom </div>
					</div>
				</div>

				
			</form>
		</div>

	</div>

	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat smallTxt">Fermer la recherche</a>
		<a href="#!" class="btn waves-effect waves-green">Recherche</a>
	</div>
</div>


<datalist id="modalTagRechercheList">
  <option value="Harley">
  <option value="Moto">
  <option value="Custom">
</datalist>
