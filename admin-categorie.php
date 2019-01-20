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

			<!-- <div class="row">
				<h1>Créé un produit</h1>
				<div class="row">
					<?php include 'affichage/affichage.CreaProduitInAdmin.php' ; ?>
				</div>
			</div> -->



			<h4>Cree une categorie</h4>
			<form action="assets/php/form/admin/categorie.form.php" method="post">
				Nom categorie :
				<input type="text" name="nom">
				<button type="submit">créé</button>

			</form>



			<h4>SUPPRIMER un categorie</h4>
			<?php
				$req = "SELECT * FROM categorie";
				$traitement = $connect ->prepare($req);
				$traitement -> execute();


				while($row = $traitement->fetch()) {
					echo $row['nom_categ'] . ' || ' ;
					echo '<button onclick="deleteSql('.  $row['id_categ'] .', \'categorie\')">supprimer</button>';
					echo "<br>";
				} 
			?>

			

			<hr> <!-- --------------------------------------------------------------------------- -->

			<hr> <!-- --------------------------------------------------------------------------- -->





			<h4>Cree une categorie-sous</h4>
			<form action="assets/php/form/admin/sous_categ.form.php" method="post">
				Nom sous-categorie : <input type="text" name="nom">
				<button type="submit">créé</button>

			</form>



			<h4>SUPPRIMER un categorie-sous</h4>


			<?php
				$req = "SELECT * FROM sous_categ";
				$traitement = $connect ->prepare($req);
				$traitement -> execute();


				while($row = $traitement->fetch()) {
					echo $row['nom_sousCateg'] . ' || ' ;
					echo '<button onclick="deleteSql('.  $row['id_sousCateg'] .', \'sous_categ\')">supprimer</button>';
					echo "<br>";
				} 
			?>









			<hr> <!-- --------------------------------------------------------------------------- -->


			<hr> <!-- --------------------------------------------------------------------------- -->


			<h4>Lier une categorie a une categorie-sous</h4>

			<p>Ne fonctionne pas encore. Je m'engage donc à moi-même associer les catégories et les sous catégorie que tu rentreras c'est prochain jour jusqu'à qu'elle soit fonctionnel </p>
			<!--

			<?php
				$req = "SELECT * FROM categorie";
				$traitement = $connect ->prepare($req);
				$traitement -> execute();


				while($row = $traitement->fetch()) {
					echo '<form action="assets/php/form/admin/lienCategorieEtSous.form.php?id='. $row['id_categ'] .'">';
						echo $row['nom_categ'] . ' || ' ;
				?>
						<div class="input-field col s10">
	                            <select multiple name="sous_categ[]">
	                                <?php
	                                    $req = "SELECT * FROM sous_categ";
										$traitement2 = $connect ->prepare($req);
										$traitement2 -> execute();

										while($row2 = $traitement2->fetch()) {
		                                    if (true) {
		                                    	echo '<option value="'.  $row2['id_sousCateg'] .'" selected>';
		                                            echo $objAct->getNom(); 
		                                        echo "</option >";
		                                    }
		                                }	                                     
	                                ?>
	                            </select>
	                            <label>Activiter</label>
	                        </div>

				<?php
					echo "</form>";
					echo "<p>---------------------</p>";
				} 
			?>-->



		</div>
		
		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php include 'assets/php/script_end_body.php'; ?>
	</body>
</html>