<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
    
    try {
        include '../../PDO.php';
    
        $req = "INSERT INTO `typo` (	`id_Typo`, `nom_typo`, `link_typo`,`class_typo`,`activer_typo`) 
                            VALUES (	NULL,?,?,?,1);";

		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['nom']);
		$traitement -> bindParam(2 , $_POST['link']);
		$traitement -> bindParam(3 , $_POST['css']);

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