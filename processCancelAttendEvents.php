<?php

session_start();

	
	$userID  = $_SESSION['user'];
	$eventsID = $_GET['uid'];

	

    header("Location: alumniViewPerEvents.php?uid=$eventsID");
	
	


?>