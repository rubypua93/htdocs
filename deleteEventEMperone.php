<?php

$eventsID = $_GET['uid'];

	require_once("DBConnect.php");

    	  
	       

	        $q = "delete from events where eventsID = '".$eventsID."'";
    mysqli_query($conn, $q) or die(mysql_error());

			

	
    
    header("Location: eventmanager.php");


?>