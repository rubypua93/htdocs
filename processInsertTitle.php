<?php
	session_start();
    require_once("DBConnect.php");
	
		$q = "insert into surverytitle(titledescp) values('".$_POST["Title"]."')";

	
	mysqli_query($conn, $q) or die(mysql_error());
	
	$id = mysqli_insert_id($conn);
    
    //$_SESSION['user'] =  mysqli_insert_id ($conn);
    header("Location: uploadQuestion.php?titleId=$id");


?>