<?php

session_start();
include_once 'DBConnect.php';

$titleId = $_GET['titleId'];
$flag = $_GET['flag'];



	if($flag == 'Y'){
	 $sql = "UPDATE surverytitle SET status = 'N' where id = ".$titleId;
			    
}
else{
	$sql = "UPDATE surverytitle SET status = 'Y' where id = ".$titleId;
}
mysqli_query($conn, $sql) or die(mysql_error());
				header("Location: survey.php");

?>
