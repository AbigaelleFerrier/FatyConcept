<?php
	session_start();	
	unset($_SESSION['client'], $_SESSION['admin'], $_SESSION['pannier']);
	header('Location:index.php?co=dc');