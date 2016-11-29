<?php
session_start();
$question = $_POST['qa'];
$answera = $_POST['answer'];
$answerothers = $_POST['otherspecify'];
$titleId = $_POST['titleId'];


	require_once("DBConnect.php");

foreach( $question as $key => $n ) {
    	  
	       if($answerothers[$key] == ''){

	        $q = "insert into studentAnswer (userid,quesstionid,answer) VALUES ('".$_SESSION['user']."','".$question[$key]."','".$answera[$key]."')";
}
else{
	$q = "insert into studentAnswer (userid,quesstionid,answer,remarks) VALUES ('".$_SESSION['user']."','".$question[$key]."','Other','".$answerothers[$key]."')";
}
    mysqli_query($conn, $q) or die(mysql_error());
			
}
	
    
    header("Location: studentViewTitle.php");


?>