<?php

session_start();
include_once 'DBConnect.php';

$getTitle = $_POST['title'];
$getIndustry = $_POST['industry'];
$getCompany = $_POST['company'];
$getState = $_POST['state'];
$getAddress = $_POST['address'];
$getRequirement = $_POST['requirement'];
$getSalary = $_POST['salary'];
$getTJobscope = $_POST['jobscope'];
$getName = $_POST['name'];
$getEmail = $_POST['email'];
$getPhone = $_POST['phone'];
$getFax = $_POST['fax'];
$getWebsite = $_POST['website'];
$getUID = $_POST['id'];

	
	 $sql = "UPDATE job SET title = '".$getTitle."',  industry = '".$getIndustry."',  company = '".$getCompany."'
	 ,  state = '".$getState."', address = '".$getAddress."',  requirement = '".$getRequirement."',  salary = '".$getSalary."',  jobscope = '".$getTJobscope."'
	 ,  contact_name = '".$getName."',  contact_email = '".$getEmail."',  contact_phone = '".$getPhone."',  fax = '".$getFax."',  website = '".$getWebsite."'
				
			  WHERE jobID=".$getUID;
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: myjob.php?uid=".$getUID);

?>