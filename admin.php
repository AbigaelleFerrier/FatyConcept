<?php
	include 'assets/php/start.php' ;
	if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') {
?>
	
	<!DOCTYPE html>

	<html>
		<head>
		    <?php include 'assets/php/head.php'; ?>
		</head>

		<body>
			<!-- Nav -->
			<?php include 'assets/php/nav&modal.php' ?>

			<!-- Main -->
			<div class="row ">
				<ul class="tabs tabs-fixed-width tab-demo z-depth-1" id="tabsA">
					<li class="tab"><a href="#commande" class="active" 	>Commande</a></li>
					<li class="tab disabled"><a href=""></a></li>

					<li class="tab"><a href="#produit" 		>Produit</a></li>

					<li class="tab"><a href="#categorie" 	>CATEGORIE</a></li>

					<li class="tab"><a href="#couleur" 		>Couleur</a></li>
					<li class="tab"><a href="#typeProd" 	>Type de produit</a></li>
					<li class="tab"><a href="#typeTaille" 	>Type de Taille</a></li>
					<li class="tab"><a href="#taille" 		>Taille / Prix / Poid</a></li>
					<li class="tab"><a href="#typo" 		>Typo</a></li>
					<li class="tab disabled"><a href=""></a></li>

					<li class="tab"><a href="#option" 		>Option du site</a></li>


				</ul>						
				
				<!-- COMMANDE -->
				<div class="col offset-s1 s10" id="commande">
					<h4>Commandes</h4>
					<blockquote>
						
					</blockquote>
				</div>

				<!-- PRODUI -->
					<!-- MODIF PRODUIT -->
					<div class="col offset-s1 s10" id="produit">
						
						
						<h4>Produits</h4>
							
						<blockquote>
							<h5>- Ajouter un produit -</h5>
							<a href="admin-creationProduit.php">Cree un nouveaux produit</a>
						</blockquote>

						<blockquote>
							<h5>- Modification rapide -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.modifRapideProduit.php' ; ?>
							</div>
						</blockquote>

						<blockquote>
							<h5>- Modifier un produit -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.ProduitInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>

				<!-- CATEG -->
					<!-- MODIF PRODUIT -->
					<div class="col offset-s1 s10" id="categorie">
						
						
						<h4>categorie</h4>
							
						<blockquote>
							<h5>- Ajouter une categorie -</h5>
							<a href="admin-categorie.php">Cree une nouvelle categorie (PAGE TEMPORAIRE)</a>
						</blockquote>

					</div>

					<!-- Modif Couleur -->
					<div class="col offset-s1 s10" id="couleur">
						<h4>Couleur</h4>

						<blockquote>
							<h5>- Ajouter une couleur -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.CreaCouleurInAdmin.php' ; ?>
							</div>
						</blockquote>
						<blockquote>
							<h5>- Modifier une couleur -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.CouleurInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>

					<!-- Type de produit -->
					<div class="col offset-s1 s10" id="typeProd">
						<h4>Type de produit</h4>
						<blockquote>
							<h5>- Ajouter un type de produit -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.CreaTypeProdInAdmin.php' ; ?>
							</div>	
						</blockquote>
						<blockquote>
							<h5>- Modifier une couleur -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.TypeProdInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>

					<!-- Tag !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TYPO
					<div class="col offset-s1 s10" id="Tag">
						<h4>Tag</h4>
						<blockquote>
							<h5>- Ajouter un tag -</h5>
							<div class="row">
								
								<?php //include 'affichage/affichage.CreaTagInAdmin.php' ; ?>
							</div>	
						</blockquote>
						<blockquote>
							<h5>- Modifier un tag -</h5>
							<div class="row">
								
								<?php //include 'affichage/affichage.TagInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>
					-->

					<!-- Type Taille -->
					<div class="col offset-s1 s10" id="typeTaille">
						<h4>Type de Taille</h4>
						<blockquote>
							<h5>- Ajouter un type de taille -</h5>
							<p>"Type taille" permet de définir l'uniter et son prix lier qu'un produit utilise pour être vendu</p>
							<div class="row">
								
								<?php include 'affichage/affichage.CreaTypeTailleInAdmin.php' ; ?>
							</div>	
						</blockquote>
						<blockquote>
							<h5>- Modifier un type de taille -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.TypeTailleInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>

					<!-- Taille -->
					<div class="col offset-s1 s10" id="taille">
						<h4>Taille / Prix</h4>
						<blockquote>
							<h5>- Ajouter une taille -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.CreaTailleInAdmin.php' ; ?>
							</div>	
						</blockquote>
						<blockquote>
							<h5>- Modifier une taille -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.TailleInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>

					<!-- Typo -->
					<div class="col offset-s1 s10" id="typo">
						<h4>Typo</h4>
						<blockquote>
							<h5>- Ajouter une typo -</h5>
							<p>Les différente typo gratuite et utilisable sur le web (& téléchargable) : <a href="https://fonts.google.com">Google Font</a></p>
							<div class="row">
								
								<?php include 'affichage/affichage.CreaTypoInAdmin.php' ; ?>
							</div>	
						</blockquote>
						<blockquote>
							<h5>- Modifier une typo -</h5>
							<div class="row">
								
								<?php include 'affichage/affichage.TypoInAdmin.php' ; ?>
							</div>
						</blockquote>
					</div>

				<!-- option -->
				<div class="col offset-s1 s10" id="option">
					<!-- Modification de l'header acceuil -->
						<h4>Image principal du site</h4>
						<blockquote>
							<p>Pour convenir l'image ne doit pas dépasser 3840px par 5376px (valeurs de l'image la plus grande essayée aillant fonctionné)</p>
							<form class="col s12" action="assets/php/form/admin/header.form.php" method="post" enctype="multipart/form-data">
								<div class="file-field input-field col s10">
						            <div class="btn">
						                <span>Image</span>
								          <input name="file" type="file" required>
						            </div>
						            <div class="file-path-wrapper">
						                <input name="file-path" class="file-path validate" type="text" required>
						            </div>
						        </div>
						        
						        <button class="btn" type="submit">changer</button>
						        
					    	</form>
						</blockquote>
					
					<!-- Modufication footer -->
						<h4>Pied de page</h4>
						<blockquote>
							<?php include 'affichage/affichage.ModifFooter.php'; ?>
						</blockquote>

					<!-- Modufication footer -->
						<h4>Information</h4>
						<blockquote>
							<?php include 'affichage/affichage.ModifParam.php'; ?>
						</blockquote>

				</div>
				</div>
			</div>
			
			<!-- Footer -->
			<?php include 'assets/php/footer.php'; ?>

			<!--JavaScript at end of body for optimized loading-->
			<?php include 'assets/php/script_end_body.php'; ?>
		</body>
	</html>
<?php 
	}
	else {
		header('Location:index.php');
	}
?>
	        