<?php

session_start();
include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
	$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
    
	
	if(empty($_POST)) { exit; }
    
    $errors = array();
	
	
	
    //Password validation 
    
    if($_POST["password"] != $_POST["checkpassword"]){
		echo "<script type='text/javascript'>alert('Password not the same.');window.history.back();</script>";
	}
    else if(strlen($_POST["password"]) < 5){
		echo "<script type='text/javascript'>alert('Password must be more than 5 characters.');window.history.back();</script>";
	}
	else{
	
		$sql = "UPDATE user SET password = '".$_POST["password"]."'
               WHERE userID =" .$_SESSION['user'];
			    mysqli_query($conn, $sql) or die(mysql_error());
		echo "<script type='text/javascript'>alert('Password changed successfully.');window.history.back();</script>";
				
				//header("Location: alumni.php");
	}
?>


