<?php

session_start();
include_once 'DBConnect.php';

$getTitle = $_POST['Title'];

$titleId = $_POST['titleId'];


	
	 $sql = "UPDATE surverytitle SET titledescp = '".$getTitle."'  WHERE id=".$titleId;
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: viewQuestion.php?titleId=$titleId");

?>