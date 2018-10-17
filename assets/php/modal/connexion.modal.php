<div id="connexionModal" class="modal">
	<div class="modal-content">
		<h4>Connexion</h4>

		<?php
			$path = $_SERVER['PHP_SELF'];
			$file = basename ($path);

			if ($file == "produit.php") {
				$file = $file . "?ref=" . $_GET['ref'];
			}
		?>

		<!-- FORM CONNEXION -->
		<div class="row">
			<form class="col s12">
				<p style="color: #F44336;" class="row" id="outputErr">
				</p>
			 	<div class="row">
			 		<div class="input-field col s12">
			 			<input id="email" type="email" class="validate" required>
			 			<label for="email">Email</label>
			 			<span class="helper-text" data-error="Indiquez une adresse mail valide" data-success="Email valide"></span>
			 		</div>
			 	</div>
			 	<div class="row">
			 		<div class="input-field col s12">
			 			<input id="pwd" type="password" class="validate" required>
			 			<label for="pwd">Mot de passe</label>
			 		</div>
			 	</div>
			</form>
			<a onclick="connexion()" class="waves-effect waves-light btn right">Connexion</a>
		</div>
	</div>
</div>