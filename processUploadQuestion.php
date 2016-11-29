<?php
	session_start();
    require_once("DBConnect.php");

		$q = "insert into SURVERYQA(QUESTION,ANSWERA,ANSWERB,ANSWERC,ANSWERD,ANSWERE,ANSWERF,ANSWERG,ANSWERH,title) values('".$_POST["Question"]."','".$_POST["answerA"]."','".$_POST["answerB"]."','".$_POST["answerC"]."','".$_POST["answerD"]."','".$_POST["answerE"]."','".$_POST["answerF"]."','".$_POST["answerG"]."','".$_POST["answerH"]."','".$_POST["titleId"]."')";

	
	mysqli_query($conn, $q) or die(mysql_error());
	
	$id = $_POST["titleId"];
    
    //$_SESSION['user'] =  mysqli_insert_id ($conn);
    header("Location: uploadQuestion.php?titleId=$id");

?>