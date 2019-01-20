<?php 
try {
	$dsn ="mysql:host=fatyconcjbfatyrt.mysql.db;dbname=fatyconcjbfatyrt;charset=UTF8";
	$user='fatyconcjbfatyrt';
	$mdp ='E124zuqx145';


    $dsn ="mysql:host=localhost; dbname=fatyconcept; charset=UTF8";
    $user='root';
    $mdp ='';


	$connect = new PDO($dsn,$user,$mdp);
}
catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}


 
 

    