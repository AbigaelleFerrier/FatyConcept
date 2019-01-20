<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

    try {
        include '../../PDO.php';
            
        $req = "INSERT INTO `taille` (	`id_Taille`, `Taille`, `id_typeTaille`,`prix_taille`, `poid`) 
                            VALUES   (	NULL,?,?,?,?);";

		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['Taille']);
		$traitement -> bindParam(2 , $_POST['type']);
		$traitement -> bindParam(3 , $_POST['prix']);
		$traitement -> bindParam(4 , $_POST['poid']);

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