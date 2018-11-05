<?php include 'assets/php/start.php' ?>
<!DOCTYPE html>

<html>
	<head>
	    <?php include 'assets/php/head.php'; ?>
	</head>

	<body>
		<!-- Nav -->
		<?php include 'assets/php/nav&modal.php' ?>

		<!-- Main -->
		<div class="container">

			<div class="row produit ">
				<div class="col s12">
					<h1 class="h1Prod">Lettrage adhésif</h1>
					
					<div class="row" style="margin-top: 4em">
						<div class="col s12">
							<?php
								$req = "SELECT * FROM typo ORDER BY `typo`.`nom_typo` ASC";
								$traitement = $connect ->prepare($req);
								$traitement -> execute();

								$reqCoul = "SELECT * FROM couleur WHERE activer_couleur = 1";
								$traitementCoul = $connect ->prepare($reqCoul);
								$traitementCoul -> execute();

								$typo = $traitement->fetch();
								$coul = $traitementCoul->fetch();

							echo'<textarea id="LA" class="materialize-textarea"
								style="'. $typo['class_typo'] .'; color: '. $coul['couleurHexa'] .' ; height: inherit; font-size : 15mm"
								placeholder="Personaliser rapidement votre propre lettrage adhésif"></textarea>';
							?>
						</div>
					</div>

					<div class="row" style="margin-top: 4em">
						
						<!-- TYPO -->
						<div class="input-field col s12 m12 l4">
							<?php
								$req = "SELECT * FROM typo ORDER BY `typo`.`nom_typo` ASC";
								$traitement = $connect ->prepare($req);
								$traitement -> execute();

								if ($row = $traitement->fetch()) {
									echo '<select class="browser-default" style="'. $row['class_typo'] .'" onchange="this.style = this.value; afficheTypoOnLA(this.style.fontFamily); ">';
								
										echo '<option style="'. $row['class_typo'] .'" value="'. $row['class_typo'].'" selected>'. $row['nom_typo'] .'</option>';

										while($row = $traitement->fetch()) {
											echo '<option style="'. $row['class_typo'] .'" value="'. $row['class_typo'] .'">'. $row['nom_typo'] .'</option>';
										} 
									}										
								?>
						    		</select>
						</div>	
						
						<!-- COULEUR -->
						<?php
							$reqCoul = "SELECT * FROM couleur WHERE activer_couleur = 1";
							$traitementCoul = $connect ->prepare($reqCoul);
							$traitementCoul -> execute();							
					
							echo '<div class="input-field col l4 m12 s12">';
							    echo '<select id="couleur" class="browser-default" onchange="afficheCouleurOnLA(this.value)">';
							    	$i = true;
							     	while($rowCoul = $traitementCoul->fetch()) {
							     		// Première couleur //
							     		if ($i) {
							     			$premiereCouleur = $rowCoul['couleurHexa'];
							     			$i = false; 
							     		}

					     				echo '<option value="'. $rowCoul['id_couleur'] .'">'. $rowCoul['nom_couleur'] .'</option>';
					     			}

					     			// Secu //
					     			if (isset($premiereCouleur)) {}
					     			else {
					     				$premiereCouleur = "#5b0035";
					     			}
							     	
							    echo '</select>';
							    // echo '<label>Couleur :</label>';
							echo '</div>';

							// echo '<div id="choixCouleurAffichage" class="col offset-l1 l3 m12 s12 valign-wrapper" style="background:'. $premiereCouleur .'">
							// 	  </div>';
						?>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php include 'assets/php/script_end_body.php'; ?>
	</body>
</html>
        