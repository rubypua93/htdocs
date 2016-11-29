<?php

session_start();


	require_once("DBConnect.php");
	
	$userID  = $_SESSION['user'];
	$eventsID = $_GET['uid'];
	$q = "delete from attendees where eventsID = '".$eventsID."' and userID = '".$userID."'";
		

	mysqli_query($conn, $q) or die(mysql_error());
	

    header("Location: alumniViewPerEvents.php?uid=$eventsID");
	
	


?>