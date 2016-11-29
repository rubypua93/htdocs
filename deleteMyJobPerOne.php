<?php

$job = $_GET['uid'];

	require_once("DBConnect.php");

    	  
	       

	        $q = "delete from job where jobID = '".$job."'";
    mysqli_query($conn, $q) or die(mysql_error());

			

	
    
    header("Location: myjob.php");


?>