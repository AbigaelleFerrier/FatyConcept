<?php 
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

    
        // QUND JE RECUP UN OUI/NON
    if (isset($_POST['inverser'])) 	   { $inv = 1;	}
    else				   { $inv = 0;  }
    
    try {
        include '../../PDO.php';
    
        
        
        
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