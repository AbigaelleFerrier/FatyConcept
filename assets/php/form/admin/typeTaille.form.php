<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
    
    try {
        include '../../PDO.php';
    
        $req = "INSERT INTO `type_taille` (	`id_typeTaille`, `nom_typeTaille`) 
                              VALUES 	  (	NULL,?);";

		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['nom']);

		$traitement -> execute();
        
        
        $count = $traitement -> rowCount();
	if($count =='0'){
            var_dump($traitement);
            //header('Location:../../../../admin.php?ErreurDefichier'); 
	}
	else{
	    header('Location:../../../../admin.php?Transfertreussi"');
	}

    }
    catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
    }
}
?>