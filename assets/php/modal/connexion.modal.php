<div id="connexionModal" class="modal">
	<div class="modal-content row">
		

		<ul class="tabs" id="tabs">
			<li class="tab col l6 m6 s6"><a class="active" href="#Connexion">Connexion</a></li>
			<li class="tab col l6 m6 s6"><a href="#Inscription">Inscription</a></li>
		</ul>

		<p style="color: #F44336;" class="row" id="outputErr"></p>
		
		<div id="Connexion" class="col s12">
			<!-- FORM CONNEXION -->
			<div class="row">
				<form class="col s12">
					
				 	<div class="row">
				 		<div class="input-field col s12">
				 			<input id="email" type="email" class="validate" autocomplete="email" required>
				 			<label for="email">Email</label>
				 			<span class="helper-text" data-error="Indiquez une adresse mail valide" data-success="Email valide"></span>
				 		</div>
				 	</div>
				 	<div class="row">
				 		<div class="input-field col s12">
				 			<input id="pwd" type="password" class="validate" autocomplete='current-password' required>
				 			<label for="pwd">Mot de passe</label>
				 		</div>
				 	</div>
				 	<button onclick="connexion()" class="waves-effect waves-light btn right">Connexion</button>
				</form>	
			</div>	
		</div>
		<div id="Inscription" class="col s12">
			<div class="row">
				<form class="col s12" method="post" action="assets/php/form/inscription.form.php">
					<div class="row">
				 		<div class="input-field col s6">
				 			<input id="nom" type="text" name="nom" class="validate" required>
				 			<label for="nom">Nom*</label>
				 		</div>
				 		<div class="input-field col s6">
				 			<input id="prenom" type="text" name="prenom" class="validate" required>
				 			<label for="prenom">Prenom*</label>
				 		</div>
				 	</div>
					<div class="row">
				 		<div class="input-field col s12">
				 			<input id="emailIns" type="email" name="email" class="validate" autocomplete="email" required>
				 			<label for="emailIns">Email*</label>
				 			<span class="helper-text" data-error="Indiquez une adresse mail valide" data-success="Email valide"></span>
				 		</div>
				 	</div>
				 	<div class="row">
				 		<div class="input-field col s5">
				 			<input id="pwdIns" type="password" name="mdp" class="validate" autocomplete='current-password' required onblur="inscriptionMDP();">
				 			<label for="pwdIns">Mot de passe*</label>
				 		</div>
				 		<div class="input-field col s1">
				 			<i onclick="passwordShow(0)" class="material-icons">remove_red_eye</i>
				 		</div>
				 		<div class="input-field col s5">
				 			<input id="pwdIns2" type="password" name="mdp2" class="validate" autocomplete='current-password' required onblur="inscriptionMDP();">
				 			<label for="pwdIns2">Mot de passe*</label>
				 		</div>
				 		<div class="input-field col s1">
				 			<i onclick="passwordShow(1)" class="material-icons">remove_red_eye</i>
				 		</div>
				 	</div>
				 	<div class="row">
				 		<div class="input-field col s12">
				 			<input id="adresse" name="adresse" type="text" class="validate" required>
				 			<label for="adresse">Adresse* (utiliser pour la livraison)</label>
				 		</div>
				 		<div class="input-field col s6">
				 			<input id="telephone" name="tel" type="text" class="validate">
				 			<label for="telephone">Téléphone</label>
				 		</div>
				 	</div>
				 	<button type="submit" class="waves-effect waves-light btn right">Inscription</button>
				</form>
			</div>
		</div>
		
		
	</div>
</div>