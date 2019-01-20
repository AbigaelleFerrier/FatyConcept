<?php include 'assets/php/start.php' ?>

<!DOCTYPE html>

<html>
	<head>
	    <?php include 'assets/php/head.php'; ?>
	</head>

	<body>
		<!-- Header -->
		<?php include 'assets/php/header.php'; ?>

		<!-- Nav -->
		<?php include 'assets/php/nav&modal.php'; ?>


		<!-- Main -->

		<?php
		    $req = "SELECT * FROM param";
		    $traitementParam = $connect ->prepare($req);
		    $traitementParam -> execute();
		    $rowParam = $traitementParam->fetch();
		?>

		<div class="container">
			<div class="row">
                <h1> Mentions Légales </h1>
                <p>
                	Faty Concept, <?php echo ($rowParam['adresse']); ?><br>
                	Téléphone : <?php echo ($rowParam['telephone']); ?>  <br>
                	Mail : <?php echo ($rowParam['mail']); ?>  <br>
	                SIRET : <?php echo ($rowParam['siret']); ?> <br>
	                APE : <?php echo ($rowParam['ape']); ?> <br>
	                TVA n° : <?php echo ($rowParam['tva']); ?> <br>
	                Le site https://www.fatyconcept.fr a été édité par : ASHEART COMMUNICATION <br>
	                <br>	               
	                ASHEART, 2A rue saint Gervais 48000 Mende (France). Tél : 06 10 95 95 07.<br> 
	                Pour plus d'information : https://asheart.fr/  <br>
	            </p>
                
                <h2>PROPRIETE INTELLECTUELLE</h2>
       				<p>Le Site FatyConcept.fr et tous ses éléments relèvent de la législation applicable en matière de propriété intellectuelle (droit d’auteur, marques et dessins et modèles) et sont protégés à ce titre. L’ensemble du contenu du Site FatyConcept.fr (Module de lettrage spécifique avec hauteur des petits caractères, module de stickers, illustrations, textes, libellés, marques, images, vidéos etc.) est la propriété de FatyConcept.fr, de ses concédants de licence ou de ses fournisseurs d’images tiers ou partenaires. Toute reproduction partielle ou totale du contenu par quelque procédé que ce soit et sur n’importe quel support est sujette à une autorisation préalable et expresse de FatyConcept.fr Toutes les informations, les contenus, les dossiers et les logiciels offerts par nos services sont protégés par les lois françaises et internationales concernant la propriété intellectuelle et le copyright. Tous les éléments du Site de FatyConcept.fr , y compris, mais non exclusivement, la conception générale et le contenu, sont protégés par des brevets, des copyrights, des droits d’auteur, des marques commerciales ou d’autres lois relatives à la protection de la propriété intellectuelle. FatyConcept.fr ne peut vous donner la permission de copier, afficher ou distribuer tout contenu pour lequel vous ne possédez pas de droits de propriété intellectuelle. Toute utilisation de ces contenus en fraude des droits détenus par des tiers sur ceux-ci est constitutive du délit de contrefaçon, sévèrement sanctionné par le Code de la Propriété Intellectuelle. FatyConcept.fr ne saurait en aucun cas être tenue pour responsable de la violation par un utilisateur de droits détenus par des tiers et perpétrée à raison des activités de ce dernier sur le Site. Tous les droits de reproduction, de représentation et d’adaptation sont réservés, y compris pour les documents téléchargeables et les illustrations et photographies. Conformément au code de la propriété intellectuelle, toute reproduction, représentation ou adaptation de tout ou partie du Site ou de ses éléments, par quelque moyen, sur quelque support que ce soit et à quelque fin que ce soit, non expressément autorisée préalablement par écrit par FatyConcept.fr , serait illicite et constituerait un délit de contrefaçon passible de sanctions pénales.</p>

                <h2>PROTECTION DES DONNEES PERSONNELLES</h2>
                	<p>L'absence d'informations indispensables au traitement et à l’acheminement d'une commande et à l’établissement de sa facture, entraîne l’annulation de votre commande. En vous inscrivant sur le Site, vous vous engagez à nous fournir des informations sincères et véritables vous concernant. La communication de fausses informations est contraire aux conditions de ventes ainsi qu’aux conditions d’utilisation figurant sur le Site. Conformément à la loi «Informatique et Libertés», le traitement de vos informations fera l’objet d’une déclaration auprès de la Commission Nationale de l’Informatique et des Libertés (CNIL). FatyConcept.fr est autorisé à prélever, traiter et utiliser les informations vous concernant. Ces données font l’objet d’un traitement informatique. Cette activité est strictement réglementée : le fichier sera déclaré à la Commission Nationale formatique et Libertés. Vous avez un droit permanent d’accès et de rectification sur toutes les données vous concernant, conformément aux textes européens et aux lois nationales en vigueur (article 34 de la loi du 6 janvier 1978). Vous pouvez, à n’importe quel moment, faire une demande auprès de FatyConcept.fr afin de savoir quelles sont les informations dont celle-ci dispose sur vous. Vous pouvez à tout moment modifier ces données en nous en faisant la demande. En conformité aux règles de protection des données “RGPD” (mise en place le 25 mai 2018) seuls les données fournie dans le formulaire de contact ( disponible à cette adresse : https://FatyConcept.fr/contact ) sont envoyer à l’adresse mail ???????????? ; dans un soucis de rapidité de réponses, un transfert du mail et effectuer par “l’hébergeur” (vu ci-dessus) à l’adresse ??????????. Les données sont conservées 10 ans à des fins statistiques.</p>

                <h2>LOI INFORMATIQUE ET LIBERTÉS</h2>
                	<p>Conformément à la loi modifiée n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, toute personne dispose d’un droit d’accès, de rectification, d’opposition et de suppression des données la concernant, pouvant être exercé à tout moment en s’adressant à : nom_société , addresse , code_postale ville ou par mail : ???????</p>

                <h2>LIENS HYPERTEXTES</h2>
                	<p>Le Site de FatyConcept.fr peut comporter des liens vers d’autres sites appartenant à des tiers. Ces liens ne constituent pas une approbation, une validation, une adhésion de FatyConcept.fr au contenu de ces sites. Tout lien en direction du Site ne répondant pas aux présentes conditions est proscrit, comme par exemple l’insertion d’un lien profond vers un document autre qu’une page internet concernant les produits proposés (tel que document téléchargeable), sauf autorisation préalable et écrite de FatyConcept.fr. De même, toute utilisation ou reproduction, même partielle, d’un des éléments du Site de FatyConcept.fr à l’intérieur d’un site tiers par le biais de procédés dits d’inclusion, de cadres (frames), ou de tout autre procédé de nature similaire sont formellement interdits.</p>

                <h2>RESPONSABILITE</h2>
                	<p>FatyConcept.fr ne peut être tenue responsable des dommages de toute natures, aussi bien matériels qu'immatériels ou corporels, dû à un mauvais fonctionnement ou une mauvaise utilisation des produits commercialisés. La responsabilité de FatyConcept sera, dans tout état de cause limitée au montant de la commande et ne saurait être mis en cause pour de simples erreurs ou omissions qui auraient pu subsister malgré toutes les précautions prises dans la présentation de ces produits. L’impossibilité totale ou partielle d’utiliser les produits, notamment pour cause d’incompatibilité du matériel ne peut donner lieu à aucun dédommagement, remboursement ou mise en cause de la responsabilité de FatyConcept, sauf dans le cas d’un vice caché avéré, de non-conformité, de défectuosité.</p>

				<h2>UTILISATION DU SITE</h2>
					<p>Ce Site et son contenu sont destinés aux clients de Fatyconcept.fr. Vous n’êtes pas autorisé à utiliser ce Site ou son Contenu autrement que dans le cadre de l’exercice de vos activités commerciales avec FatyConcept.fr. Toute utilisation non autorisée par les présentes de ce Site, de son Contenu ou de ses fonctionnalités peut entraîner l’annulation immédiate de tout nom d’utilisateur, mot de passe ou autre autorisation accordés par FatyConcept.fr pour l’utilisation dudit Site.</p>

				<h2>LOI APPLICABLE</h2>
					<p>Le Site est soumis à la loi française.<br>
					Toute utilisation qui en est faite doit l’être dans le respect de la législation en vigueur et sera réputée avoir eu lieu sur le territoire français. FatyConcept.fr se réserve le droit d’entreprendre des actions en justice contre les personnes agissant d’une manière pouvant être considérée comme illégale ou illicite ou contrevenant aux présentes.</p>

				<h2>HEBERGEMENT</h2>
					<p>Le site web www.FatyConcept.fr est hébergé par OVH.<br>
						Ovh SAS au capital de 10 069 020 € <br>
						RCS Lille Métropole 424 761 419 00045<br>
						Code APE 2620Z<br>
						N° TVA : FR 22 424 761 419<br>
						Siège social : 2 rue Kellermann - 59100 - Roubaix, France.<br></p>

				<hr>
				<p>Les présentes mentions légales peuvent être modifiées à tout moment et sans préavis, nous vous invitons à les consulter régulièrement (dernière mise à jour 17/10/2018).</p>

 

 
		<!-- Footer -->
		<?php include 'assets/php/footer.php'; ?>

		<!--JavaScript at end of body for optimized loading-->
		<?php 
			include 'assets/php/script_end_body.php';

			if (isset($_GET['err']) && $_GET['err']== 11) {
				echo '<script type="text/javascript">alert("Ce produit n\'est plus disponible ou à été retiré du catalogue ")</script>';
			}
		?>
		
	</body>
</html>
 