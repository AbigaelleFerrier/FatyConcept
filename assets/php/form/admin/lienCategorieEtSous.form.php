<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
    
    try { 
        include '../../PDO.php';
        var_dump($_POST);


		//$SQL = "DELETE FROM `souscateg_categ` WHERE id_categ = ?";
			  		// $traitement = $db->prepare($SQL);
			  		// $traitement->bindparam(1,$_POST['id']);
			  		// $traitement->execute();
			  		
			  		foreach ($_POST['sous_categ'] as $idA) {
			  			var_dump($idA);
			  			//$SQL = "INSERT INTO `pratique` (idA, idU) VALUES (?,?) ";
			  			// $traitement = $db->prepare($SQL);
			  			// $traitement->bindparam(1, $idA); 
			  			// $traitement->bindparam(2, $_POST['id']);
			  			// $traitement->execute();
			  		}

	 //        $req = "INSERT INTO `categorie` (`id_categ`, `nom_categ`)
	 //                               VALUES 	   (	NULL,?);";

		// 	$traitement = $connect ->prepare($req);
		// 	$traitement -> bindParam(1 , $_POST['nom']);

		// 	$traitement -> execute();
	        
	        
	 //        $count = $traitement -> rowCount();
		// if($count =='0'){
	 //            var_dump($traitement);
	 //            //header('Location:../../../../admin.php?ErreurDefichier'); 
		// }
		// else{
		//     header('Location:../../../../admin-categorie.php?Transfertreussi"');
		// }

    }
    catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
    }
}
?>
