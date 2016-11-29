<?php

$status = $_POST['status'];
$photoID = $_POST['imageID'];


	require_once("DBConnect.php");
foreach( $status as $key => $n ) {
    	  
	        $q = "update photo set status = '".$status[$key]."' where photoID = '".$photoID[$key]."'";
    mysqli_query($conn, $q) or die(mysql_error());

}
	
    
header("Location: photoslideshowpreview.php");

?>