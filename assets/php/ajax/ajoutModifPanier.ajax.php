<?php
	session_start();
	
	if (isset($_SESSION['client'])) {
		echo "OK";
	}
	else {
		echo 'err01';
	}

