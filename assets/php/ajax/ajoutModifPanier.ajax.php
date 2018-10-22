<?php
	session_start();
	if (isset($_SESSION['pannier']) == FALSE) {
		$_SESSION['pannier'] 			= array();
		$_SESSION['pannier']['idP'] 	= array();
		$_SESSION['pannier']['qte'] 	= array();
		$_SESSION['pannier']['couleur']	= array();
		$_SESSION['pannier']['taille']	= array();
		$_SESSION['pannier']['option']	= array();

	}
	
	if (isset($_SESSION['client'])) {
		if (isset($_GET['idP']) && isset($_GET['qte']) && isset($_GET['taille'])) {
			array_push ($_SESSION['pannier']['idP'], $_GET['idP'] );
			array_push ($_SESSION['pannier']['qte'], $_GET['qte'] );
			array_push ($_SESSION['pannier']['taille'] ,$_GET['taille']);

			if (isset($_GET['couleur'])) {
				array_push($_SESSION['pannier']['couleur'], $_GET['couleur']);
			}
			else {
				array_push($_SESSION['pannier']['couleur'], 'E124Zuqx');
			}
			if (isset($_GET['option'])) {
				array_push($_SESSION['pannier']['option'] ,$_GET['option']);
			}
			else {
				array_push($_SESSION['pannier']['option'], 'E124Zuqx');
			}
			echo "OK";
		}
		else {
			echo "err02";
		}
		
	}
	else {
		echo 'err01';
	}

