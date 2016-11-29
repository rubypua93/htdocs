<?php

$eventsID = $_POST['eventsID'];

	require_once("DBConnect.php");

foreach( $eventsID as $key => $n ) {
    	  
	       

	        $q = "delete from events where eventsID = '".$eventsID[$key]."'";
    mysqli_query($conn, $q) or die(mysql_error());

			
}
	
    
    header("Location: viewEvents.php");


?>