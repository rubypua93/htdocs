<?php

session_start();
include_once 'DBConnect.php';

$titleId = $_GET['titleid'];
$QuestionId = $_GET['QuestionId'];





	 $sql = "delete from surveryqa where id = ".$QuestionId;
			    
mysqli_query($conn, $sql) or die(mysql_error());
				header("Location: viewQuestion.php?titleId=$titleId");

?>
