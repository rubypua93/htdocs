<?php

$phtoName = $_POST['imageName'];
$photoID = $_POST['imageID'];

	require_once("DBConnect.php");

foreach( $photoID as $key => $n ) {
    	  
	       

	        $q = "delete from photo where photoID = '".$photoID[$key]."'";
    mysqli_query($conn, $q) or die(mysql_error());
			unlink( __DIR__."/photo/".$phtoName[$key]."");
			
}
	
    
    header("Location: photoslideshow.php");


?>