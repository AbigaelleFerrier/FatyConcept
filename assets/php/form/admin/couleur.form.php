<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
   
    try {
        include '../../PDO.php';
        $req = "INSERT INTO `couleur`   (`id_couleur`,`nom_couleur`,`ref_couleur`,`activer_couleur`,`couleurHexa` ) 
                            VALUES      (NULL,?,?,1,?);";

        $traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['nom']);
		$traitement -> bindParam(2 , $_POST['ref']);
		$traitement -> bindParam(3 , $_POST['hexa']);

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

