<?php
session_start();
include_once 'DBConnect.php';

$jobID = $_POST['jobID'];
//$comment = $_POST["retrievedContent"];

	if ($_POST['action'] == 'Submit') {
		
				
		
		
		$sql = "UPDATE job SET title = '".$_POST["title"]."', industry = '".$_POST["industry"]."', otherIndustry = '".$_POST["otherIndustry"]."',  company = '".$_POST["company"]."', 
				state = '".$_POST["state"]."',  otherState = '".$_POST["otherState"]."', address = '".$_POST["address"]."', requirement = '".$_POST["requirement"]."', 
				salary = '".$_POST["salary"]."', jobscope = '".$_POST["jobscope"]."', contact_name = '".$_POST["contact_name"]."', 
				contact_email = '".$_POST["contact_email"]."', contact_phone = '".$_POST["contact_phone"]."', fax = '".$_POST["fax"]."',
				website = '".$_POST["website"]."', contact_phone = '".$_POST["contact_phone"]."', fax = '".$_POST["fax"]."',
				fax = '".$_POST["fax"]."' WHERE jobID = ".$jobID;
		mysqli_query($conn, $sql) or die(mysql_error());
		
		$fnm = $_POST["jobID"];
		move_uploaded_file($_FILES["attachment"]["tmp_name"], __DIR__."/job/" . $fnm);
		
		$file = "UPDATE job SET file = '".$fnm."'
               WHERE jobID =" .$jobID;
		mysqli_query($conn, $file) or die(mysql_error());
		
		echo "<script type='text/javascript'>alert('You have successfully edited your title.')</script>";
		}
	
					
		
	else if ($_POST['action'] == 'Delete') {
		echo "delete <br/>";
		echo $_POST['wallID'];
		$sql = "DELETE FROM job where jobID = ".$jobID;
		mysqli_query($conn, $sql) or die(mysql_error());
		
		echo "<script type='text/javascript'>alert('You have successfully deleted your title.')</script>";
		}

 
  
  if (isset($_SESSION['user'])){
		//echo "Not admin";
		header("Location: myJobList.php");
		//header("Location: researchMyTitleListAdmin.php");
		
	}
	else if (isset($_SESSION['admin'])){
		//echo "admin";
		header("Location: myJobListAdmin.php");
	}



?>