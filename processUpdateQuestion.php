<?php

session_start();
include_once 'DBConnect.php';

$QUESTION = $_POST['Question'];
$ANSWERA = $_POST['answerA'];
$ANSWERB = $_POST['answerB'];
$ANSWERC = $_POST['answerC'];
$ANSWERD = $_POST['answerD'];
$ANSWERE = $_POST['answerE'];
$ANSWERF = $_POST['answerF'];
$ANSWERG = $_POST['answerG'];
$ANSWERH = $_POST['answerH'];
$titleId = $_POST['titleId'];
$getUID = $_POST['uid'];
$name1 = $_POST['name'];


	
	 $sql = "UPDATE SURVERYQA SET QUESTION = '".$QUESTION."',  ANSWERA = '".$ANSWERA."', ANSWERB = '".$ANSWERB."',  ANSWERC = '".$ANSWERC."'
	 ,  ANSWERD = '".$ANSWERD."', ANSWERE = '".$ANSWERE."', ANSWERF = '".$ANSWERF."',  ANSWERG = '".$ANSWERG."'
	 ,  ANSWERH = '".$ANSWERH."' WHERE id='".$getUID."'";
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: viewQuestion.php?titleId=$titleId");

?>
