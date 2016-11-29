<?php

$newsID = $_POST['newsID'];

	require_once("DBConnect.php");

foreach( $newsID as $key => $n ) {
    	  
	       

	        $q = "delete from news where newsID = '".$newsID[$key]."'";
    mysqli_query($conn, $q) or die(mysql_error());

			
}
	
    
    header("Location: news.php");


?>