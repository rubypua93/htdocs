<?php

session_start();
include_once 'DBConnect.php';

$titleId = $_GET['titleId'];





	 $sql = "delete from surverytitle where id = ".$titleId;
			    
mysqli_query($conn, $sql) or die(mysql_error());
				header("Location: survey.php");

?>
