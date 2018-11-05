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
					<h1>Conditions Generales de Ventes</h1>
					<h2>1. Introduction</h2>
						<p>Les conditions générales de vente détaillées ci-dessous (ci-après désignées les «Conditions Générales »), régissent exclusivement les relations contractuelles entre tout utilisateur du site www.FatyConcept.fr (ci-après désigné «le consommateur») et le vendeur : Sarl FatyConcept, dont le siège est situé au <?php echo ($rowParam['adresse']); ?>. Téléphone fixe : <?php echo ($rowParam['telephone']); ?> / Mail : <?php echo ($rowParam['mail']); ?> Ces conditions générales de vente sont les seules applicables et remplacent toute autre condition, sauf dérogation préalable, expresse et écrite. FatyConcept peut être amenée, de façon ponctuelle, à modifier certaines des dispositions de ses conditions générales de vente, il est donc nécessaire que celles-ci soient relues avant chaque visite du site www.FatyConcept.fr. Ces modifications sont opposables à compter de leurs mises en ligne et ne peuvent s’appliquer aux contrats conclus antérieurement. Chaque achat sur le Site est régi par les conditions générales applicables à la date de la commande. Nous considérons qu’en validant votre commande, vous acceptez sans réserve nos conditions générales de vente après les avoir lues. En accédant au Site, vous vous engagez à respecter les Conditions Générales, ainsi que les conditions d’utilisation y figurant. Les présentes conditions générales de vente sont accessibles de façon permanente par l’intermédiaire du site www.FatyConcept.fr dans des formats permettant leur impression, de manière à ce que ce que le consommateur puisse procéder à leur reproduction ou à leur sauvegarde. FatyConcept s’engage à respecter toutes les dispositions du Code de la Consommation relatives à la vente à distance.</p>

					<h2>2. Passer une commande</h2>
						<p>Passer votre commande 24/24h et 7/7j :<br>
							- Par Internet sur notre site : www.FatyConcept.fr<br>
							- Nous vous confirmons ensuite sa bonne réception par courrier électronique.<br>
							- Le processus commande se compose de différentes étapes successives.<br>
							- Une fois votre choix terminé, et votre panier validé, vous devrez :<br>
							- vous identifier,<br>
							- choisir votre mode de livraison.<br>
							- accepter les conditions générales de vente en cochant la case prévue à cet effet sur la page récapitulative de votre commande (intitulée « Récapitulatif commande »). Sur lequel figurera le montant ttc.<br>
							- choisir votre mode de règlement. Une fois votre mode de règlement sélectionné, vous devez procéder au paiement de votre commande, qui formalisera de manière ferme et définitive le contrat de vente qui vous lie à FatyConcept.fr<br>
						<p>

					<h2>3. Informations produits</h2>
						<p>Sarl FatyConcept apporte le plus grand soin à la mise en ligne d’informations relatives aux caractéristiques essentielles des produits, au moyen notamment de notices de pose, descriptifs techniques émanant de ses partenaires et fournisseurs et de photographies illustrant les produits et ce, dans la limite de la technique et dans le respect des meilleurs standards du marché (photos non contractuelles).</p>

					<h2>4. L’utilisation du produit</h2>
						<p>Sarl FatyConcept commercialise des lettrages adhésifs et stickers prédécoupés, réalisés avec du film adhésif vinyle brillant, fabriquées à la demande. Son objectif est de permettre la personnalisation d’espaces à l’intérieur (murs, vitrines...) et à l’extérieur (murs lisses, facades de vitrines, véhicules...). La qualité des matériaux utilisés autorise un maintien parfait de la pose et de la tenue des couleurs durant plusieurs années, selon conditions d’utilisation de pose et exposition. Sarl FatyConcept ne saurait être tenu responsable d’une mauvaise utilisation du produit tels que la pose et la dépose intempestive, surface d’utilisation détériorée, erreur de manipulation, détérioration de l'adhésif au moment de la pose, etc.<br>
						Sarl FatyConcept décline toute responsabilité par rapport à la pose des adhésifs sur les véhicules. Il est recommandé au client de prendre connaissance de la règlementation en vigueur notamment à l'arrière et sur les vitres,avant la pose des décors sur les véhicules. Sarl FatyConcept ne saurait être tenu responsable des mises en infraction ou en insécurité d'un véhicule par la pose de décoration types lettrages et stickers adhésifs.<br>
						Les types de surfaces compatibles pour la pose de nos lettrages découpés sont nombreux. Il est interdit de coller les adhésifs (stickers et lettrages) sur les peintures à base aqueuse (acrylique) pouvant entraîner une mauvaise tenue du produit. Les surfaces granuleuses, non lisses, les enduits de chaux ou autres crépis sont exclus. Seules les surfaces parfaitement lisses sont compatibles, telles que les carrosserie, les vitres, vitrines, panneaux lisse en bois peint, pvc, alu, fer peint...<br><br>

						Préparation du support :<br>
						Consulter la page mise en oeuvre, les vidéos de pose et la la fiche produit. Par prudence, il convient de tenir éloigné des enfants de moins de quatre ans de tout adhésif non collé, ainsi que des emballages.

						<h2>5. Prix</h2>
							<p>Les prix de vente indiqués sur le Site sont affichés en euros toutes taxes comprises, mais hors frais de livraison. Les éventuels frais de livraison sont indiqués au Consommateur, au fur et à mesure de ses choix de produits, et lui sont facturés à la fin de la commande en supplément du prix des produits sélectionnés. Les frais de livraison pourront être intégralement ou partiellement pris en charge par FatyConcept.fr de façon ponctuelle, en fonction de la valeur de votre commande.</p>

						<h2>6. Disponibilité</h2>
							<p>Nos délais moyens pour la fabrication de votre commande d'adhésifs ou d'accessoires sont généralement de 1 à 3 jours ouvrés, hors week-end et jours fériés plus livraison 48h à 72h par La Poste. Nous honorerons votre commande dans la limite de la disponibilité des matières premières chez nos fournisseurs. Les produits vendus sur www.FatyConcept.fr sont soumis aux contraintes de fabrication artisanale. Dans l’hypothèse où l’un des produits commandés ne serait pas disponible, nous nous engageons à vous contacter par courrier électronique dans un délai de 48h à compter de la date de votre commande, afin de vous en informer et de vous indiquer dans quel délai, ce produit pourrait vous être livré.<p>

						<h2>7. Paiement sécurisé "CB via PAYPAL ou compte Paypal"</h2>
							<p>Sarl Fatyconcept met à votre disposition plusieurs modes de paiement sécurisé. Le paiement en ligne, par carte de crédit est réalisé via le système de sécurité de PAYPAL INTEGRAL EVOLUTION qui permet le cryptage de vos coordonnées bancaires lors de leur transmission sur le réseau. Sarl FatyConcept ne saurait, en outre, supporter aucune responsabilité en cas de malversation ou d’utilisation frauduleuse d’un quelconque moyen de paiement qui n’aurait pas été détecté par cette procédure de vérification. Nous ne sauvegardons aucune donnée de carte de crédit dans notre base de données. Cette démarche s’inscrit dans notre volonté de lutter contre les fraudes aux moyens de paiement sur internet et protéger ainsi l’ensemble des consommateurs. Dans ce cas, afin d’assurer l’expédition de votre commande dans les délais prévus, nous vous recommandons d’indiquer un numéro de téléphone fixe ou mobile où vous serez facilement joignable.</p>

						<h2>8. Douane</h2>
							<p>Il n'y a pas de droits de douane pour les produits livrés en France ou dans la Communauté Européenne. Pour les autres pays, des taxes douanières peuvent éventuellement être exigibles. C'est au client de contacter les services douaniers de son pays pour faire une déclaration douanière le cas échéant. Sarl LettrePub ne peut en aucun cas être tenue pour responsable d'un éventuel surcoût lié à ces taxes douanières.</p>

						<h2>9. Déclaration douane CN23</h2>
							<p>Pour tous les produits expédiés hors Union européenne et DOM-TOM,une déclaration CN23, ainsi que la facture et jointe sur votre colis.</p>

						<h2>10. Modes de livraison</h2>
							<p>Les produits achetés sur le site sont livrés en France Métropolitaine, dans les pays de la Communauté Européenne, et dans les pays internationaux. Votre commande vous sera livrée à l’adresse que vous nous avez indiquée, lors de votre commande. Dans le cas où l’adresse de livraison est différente de l’adresse de facturation, il convient pour le consommateur de fournir ces deux adresses distinctes dans le bon de commande. En cas d’informations erronées ou incomplètes ayant entraîné l’impossibilité pour le transporteur de procéder à la livraison, une seconde livraison sera effectuée après le retour par le transporteur de la marchandise chez Sarl FatyConcept , ceci moyennant le versement préalable du montant de nouveaux frais de port de la part du consommateur. Cette participation aux frais de retour, gestion, reconditionnement et réexpédition est de 7.50 €. La date de livraison estimée est déterminée par les 2 éléments suivants :<br>
								1. le délai moyen de préparation est de 1 à 3 jours ouvrés, hors week-end et jours fériés : vérification de la fiabilité de vos informations saisies à compter de la prise en compte de votre paiement + fabrication et préparation de votre commande + prise en charge du ou des colis par le transporteur.<br><br>

								2. le délai de livraison de votre colis par le transporteur est de (48 h/72 h) jour ouvré en colissimo. En cas de retard de livraison ,nous le signaler au plus vite par email, par courrier ou par téléphone.<br>
								Nous vous proposons le mode de livraison suivant :<br>
								La livraison Colissimo Standard ou lettre suivie. Ce choix de livraison vous permet de recevoir votre colis sous (48 h/72 h) jour ouvré grâce au service Colissimo suivi. Votre commande est préparée dans notre atelier de fabrication dans un délai de (48 h/72 h) jour ouvré. Le colis est ensuite pris en charge par la Poste et est livré chez vous sous (48 h/72 h) jour ouvré. Les frais engagés pour cette option dépendent de l’article sélectionné. Le facteur ou le livreur pourront vous demander une signature à la livraison. En cas d’absence, un avis de passage est déposé dans votre boîte aux lettres et vous permet de retirer votre colis au bureau de Poste. Les colis sont conservés en instance à la Poste, pendant 15 jours calendaires. Sarl LettrePub met tout en œuvre pour respecter les délais de livraison mentionnés lors de l’enregistrement de votre commande. Néanmoins, nous ne pourrons être tenus pour responsable des conséquences dues à un retard de livraison ou à une perte de colis, causés par un tiers.<br><br>

								3. Transport et livraison : <br>
								Les livraisons sont assurées principalement par la Poste en Colissimo. Lors de la livraison, le client doit vérifier le parfait état du colis. Celui-ci doit être intact et non abîmé à la livraison. Si le colis semble en mauvais état ou avoir reçu des chocs ou avoir été ouvert, le client doit refuser le colis (celui-ci nous sera retourné et nous réexpédierons un nouveau colis) afin que nous puissions, le cas échéant, exercer tout recours contre les transporteurs. Le client est tenu de vérifier l’état de l’emballage et la conformité des produits livrés, au moment de la livraison effectuée par la Poste ou le transporteur spécialisé. Avant tout renvoi du colis (qui s’effectue à la charge du client) s’il n’a pas été refusé dans les conditions décrites ci-dessus, le client doit constater auprès de son bureau de Poste, dans les 3 jours, la détérioration subie par le colis.<br>
							Information : idéalement, le client doit ouvrir le colis devant le facteur, ou encore au bureau de Poste, s'il va le chercher après dépôt d’un avis de passage.</p>


						<h2>11. Responsabilités</h2>
							<p>Sarl FatyConcept ne peut être tenue responsable des dommages de toute nature, aussi bien matériels qu'immatériels ou corporels, dû à un mauvais fonctionnement ou une mauvaise utilisation des produits commercialisés. La responsabilité de Sarl FatyConcept sera, dans tout état de cause limitée au montant de la commande et ne saurait être mis en cause pour de simples erreurs ou omissions qui auraient pu subsister malgré toutes les précautions prises dans la présentation de ces produits. L’impossibilité totale ou partielle d’utiliser les produits, notamment pour cause d’incompatibilité du matériel ne peut donner lieu à aucun dédommagement, remboursement ou mise en cause de la responsabilité de Sarl F1atyConcept, sauf dans le cas d’un vice caché avéré, de non-conformité, de défectuosité.</p>

						<h2>12. Clause de réserve de propriété</h2>
							<p>Les produits demeurent la propriété de fatyconcept.fr jusqu’au complet encaissement de la commande. Toutefois, à compter de la réception de la commande par le client, les risques des marchandises livrées sont transférés au client.

						<h2>13. Résiliation</h2>
							<p>Sarl FatyConcept se réserve la possibilité de ne pas enregistrer un paiement et donc de ne pas confirmer une commande pour quelque raison que ce soit ; tenant en particulier à un problème d’approvisionnement ou de livraison prévisible au moment de la commande. Le Client en sera informé par tout moyen dans un délai de trois jours à compter de la commande. La non-exécution ou l’exécution partielle d’une commande n’ouvrira droit à aucune indemnité. Exceptionnellement, si Sarl FatyConcept n'a pas encore commencé à produire la marchandise, la commande peut être annulée, par simple coup de téléphone au <?php echo ($rowParam['telephone']); ?>.</p>

						<h2>14. Rétractation et retour</h2>
							<p>A/ "Lettrages adhésifs personnalisés"<br>
							Dans aucun cas une commande ne pourra être retournée sans un accord préalable par mail.Tous les lettrages adhésifs Sarl FatyConcept personnalisables ici : https://www.fatyconcept.fr/lettres-adhesives sont fabriqués et personnalisés exclusivement pour ses clients, ils rentrent dans les exceptions faites par l'article L121-21-8 du code la consommation. Dans le cas où la commande a été respectée très précisément de la part de Sarl FatyConcept, celle-ci ne pourra engager de remboursement ni accepter une éventuelle rétractation de la part d’un client dans l'hypothèse où celui-ci a validé sa commande via notre site web. L’ensemble des lettrages adhésifs vendus sur le site sont fabriqués à la demande et sur mesure. Le client choisit parmi de nombreux critères (taille, type de caractère, couleurs, etc.) pour créer ses lettrages personnalisés. Ils ne sont donc ni repris ni échangés. Toute réclamation sur les vices apparents ou sur la non-conformité des produits livrés devra être signalée par le client, par email, par téléphone ou par courrier à : fatyconcept <?php echo ($rowParam['adresse']); ?>.<br><br>

							B/  "Stickers types et Films adhésifs"<br>
						Le droit de rétractation s’appliquera seulement aux stickers et vinyles non personnalisés. Le client disposera du délai de 14 jours ouvrés en sachant que les frais de retour sont à la charge de celui-ci. Sarl FatyConcept ne pourra effectuer de remboursement mais délivrera un avoir correspondant à la marchandise commandée.</p>

						<h2>15. Contestation</h2>
							<p>Notre service client est à votre disposition pour résoudre au mieux et dans la mesure du possible à l’amiable tout litige qui pourrait survenir : utiliser le formulaire de contact ou par courrier à l’adresse suivante :  <?php echo ($rowParam['adresse']); ?>. Dans le cas contraire le Tribunal de Commerce choisie par FatyConcept sera seul compétent.</p>

					<p>Mise à jour 17/10/2018</p>
				</div>
			</div>

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
 