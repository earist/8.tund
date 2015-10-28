<?php
	//page_one.php, kaasas peab olema sessiooonifail, mis võimaldab kasutada sessiooni muutujaid
	require_once("session.php");
	
	$_SESSION["name"] = "Ea";	
	echo $_SESSION["name"] = "Ea";	
?>