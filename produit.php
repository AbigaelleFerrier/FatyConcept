<?php include 'assets/php/start.php'; ?>


<!DOCTYPE html>

<html>
	<head>
	    <?php include 'assets/php/head.php'; ?>
	</head>

	<body>
		<!-- Nav -->
			<?php include 'assets/php/nav&modal.php'; ?>

		<!-- Main -->
		<div class="container">

			<div class="row produit noMargeBottom">
				<div class="col m4 s12">
					    <img class="responsive-img z-depth-3" src="img/produit/<?php echo $rowProd['image_prod']; ?>">
				</div>
				<div class="col m8 s12">
					<?php 
						$reqTaille        =  "SELECT * FROM `taille` WHERE `id_typeTaille` = ?";
						$traitementTaille =  $connect ->prepare($reqTaille);
						$traitementTaille -> bindParam(1 , $rowProd['id_typeTaille']);
						$traitementTaille -> execute();					
						$rowTaillePrix = $traitementTaille->fetch();
					?>
					<div class="row">
						<div class="col s8">
							<h1 class="h1Prod"><?php echo $rowProd['nom_prod']; ?></h1>	
						</div>
						<div class="col s4 right">
							<h3 id="zonePrix" class="h1Prod"><?php echo $rowTaillePrix['prix_taille']; ?> €</h3>	
						</div>
						
					</div>
					
					<form>
						<div class="row">
							<div class="col m6 s12">
								
								<!-- Couleur -->
								<div class="row">

									<hr style="margin-bottom: 1.5em">

									<?php
										$reqClOuNon        =  "SELECT * FROM type_produit WHERE id_type_prod = ?";
										$traitementClOuNon =  $connect ->prepare($reqClOuNon);
										$traitementClOuNon -> bindParam(1 , $rowProd['id_type_prod']);
										$traitementClOuNon -> execute();

										if ($rowClOuNon = $traitementClOuNon->fetch()) {

											if ($rowClOuNon['necessite_couleur']) {
												
												$reqCoul = "SELECT * FROM couleur WHERE activer_couleur = 1";
												$traitementCoul = $connect ->prepare($reqCoul);
												$traitementCoul -> execute();							
										
												echo '<div class="input-field col m9 s12">';
												    echo '<select id="couleur" onchange="afficheCouleurOnProduit(this.value)">';
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
												    echo '<label>Couleur :</label>';
												echo '</div>';

												echo '<div id="choixCouleurAffichage" class="col offset-m1 m1 s12 valign-wrapper" style="background:'. $premiereCouleur .'">
													  </div>';
											}
										}
									?>									
								</div>
									

								<!-- Taille -->
								<div class="row">
									<?php 
										$reqTaille        =  "SELECT * FROM `taille` WHERE `id_typeTaille` = ?";
										$traitementTaille =  $connect ->prepare($reqTaille);
										$traitementTaille -> bindParam(1 , $rowProd['id_typeTaille']);
										$traitementTaille -> execute();					
									?>

									<div class="input-field col s12">
										<select id="taille" onchange="affichePrixOnProduit()">
											<?php
												while($rowTaille = $traitementTaille->fetch()) {
								     				echo '<option value="'. $rowTaille['id_Taille'] .'">'. $rowTaille['Taille'] .'</option>';
								     			}
											?>
										</select>
										<label>Taille :</label>
									</div>									
								</div>

								<!-- Qte -->
								<div class="row">
									<div class="col s1">
										<a href="#!" onclick="addDown(-1)" class="btn">-</a>
									</div>
									<div class="col offset-m1 m3 offset-s1 s5">
										<input value="1" id="qte" type="number" onchange="if (this.value < 1) {this.value = 1}; affichePrixOnProduit()" class="validate">
									</div>
									<div class="col s1">
										<a href="#!" onclick="addDown(1)" class="btn">+</a>
									</div>																		
								</div>

							</div>
							
							<div class="col m4 offset-m2 s12">
								<hr>
								<!-- Inverser -->
								<?php
									if ($rowProd['inverser']) {
										echo "<div id='option'>";
											echo '
												<div class="col s12">							
													<p>
											    		<label>
											        		<input onchange="affichePrixOnProduit()" id="auccun" type="radio"  name="groupInverse" checked />
											        		<span>Auccun option</span>
											      		</label>
											    	</p>
												</div>';
											echo '
												<div class="col s12">							
													<p>
											    		<label class="tooltipped" data-position="bottom" data-tooltip="Cochez cette case pour commander votre stickers avec effet miroir inversé. Attention, un produit avec tu texte sera illisible.">

											        		<input onchange="affichePrixOnProduit()" id="inverse" type="radio"  name="groupInverse"/>
											        		<span>Inverser</span>
											      		</label>
											    	</p>
												</div>';
											echo '
												<div class="col s12">							
													<p>
											    		<label class="tooltipped" data-position="bottom" data-tooltip="Cochez cette case pour commander votre stickers à la fois recto et verso (2 stickers)">

											        		<input onchange="affichePrixOnProduit()" id="rectoVerso" type="radio" name="groupInverse" />
											        		<span>Recto / Verso</span>
											      		</label>
											    	</p>
												</div>';
										echo "</div>";			 						
		 							}
		 						?>
							</div>
						</div>
					</form>
					
				</div>
				
			</div>
			<div class="row produit noMargeTop">
				<a class="waves-effect waves-light btn right" onclick="ajoutModifPanier();" >Ajouter au panier</a>
			</div>
		</div>
		
		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php include 'assets/php/script_end_body.php'; ?>

	</body>
</html>