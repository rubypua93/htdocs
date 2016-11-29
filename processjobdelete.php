<?php

$jobID = $_POST['jobID'];

	require_once("DBConnect.php");

foreach( $jobID as $key => $n ) {
    	  
	       

	        $q = "delete from job where jobID = '".$jobID[$key]."'";
    mysqli_query($conn, $q) or die(mysql_error());

			
}
	
    
    header("Location: joblist.php");


?>