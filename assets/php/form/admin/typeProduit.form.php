<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 
    
    try { 
        include '../../PDO.php';
        
        if (isset($_POST['couleurOuiNon'])) { $inv = 1;  }
        else                                { $inv = 0;  }

        var_dump(isset($_POST['couleurOuiNon']));

        $req = "INSERT INTO `type_produit` (`id_type_prod`, `nom_type_produit`, `necessite_couleur`) 
                               VALUES 	   (	NULL,?, ?);";

		$traitement = $connect ->prepare($req);

		$traitement -> bindParam(1 , $_POST['nom']);
        $traitement -> bindParam(2 , $inv);

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