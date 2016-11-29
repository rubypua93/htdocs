<?php

$newsID = $_GET['uid'];

	require_once("DBConnect.php");

    	  
	       

	        $q = "delete from news where newsID = '".$newsID."'";
    mysqli_query($conn, $q) or die(mysql_error());

			

	
    
    header("Location: news.php");


?>