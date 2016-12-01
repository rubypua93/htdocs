<?php

session_start();


	require_once("DBConnect.php");
	
	$userID  = $_SESSION['user'];
	$eventsID = $_GET['uid'];
	$q = "insert into attendees(eventsID,userID) values('".$eventsID."','".$userID."')";
		

	mysqli_query($conn, $q) or die(mysql_error());
	

    header("Location: alumniViewPerEvents.php?uid=$eventsID");
	
	//header("Location: processGoogleCalendar.php?uid=$eventsID");


?>