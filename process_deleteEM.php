<?php

$eventmanagerID = $_POST['eventmanagerID'];

	require_once("DBConnect.php");

foreach( $eventmanagerID as $key => $n ) {
    	  
	       

	        $q = "delete from eventmanager where eventmanagerID = '".$eventmanagerID[$key]."'";
    mysqli_query($conn, $q) or die(mysql_error());

			
}
	
    
    header("Location: eventmanagerlist.php");


?>