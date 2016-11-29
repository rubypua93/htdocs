<?php
	session_start();
    require_once("DBConnect.php");
	if (isset($_SESSION['adminID'])){
		$adminUserName  = $_SESSION['adminUserName'];
		$q = "insert into events(title, organizer, speaker, start_date, end_date, time, location, further_info, contact_name, contact_phone, contact_email,contact_website,create_date, created_by, admin_ind, em_ind) values('".$_POST["title"]."','".$_POST["organizer"]."','".$_POST["speaker"]."','".$_POST["startdate"]."', '".$_POST["enddate"]."','".$_POST["time"]."', '".$_POST["location"]."', '".$_POST["info"]."', '".$_POST["name"]."', '".$_POST["phonenumber"]."','".$_POST["email"]."','".$_POST["website"]."',NOW(),'admin-".$adminUserName."', 'Y', 'N')";
    }
	else{
		$eventmanagerName  = $_SESSION['eventmanagerName'];
		$q = "insert into events(title, organizer, speaker, start_date, end_date, time, location, further_info, contact_name, contact_phone, contact_email,contact_website,create_date, created_by, admin_ind, em_ind) values('".$_POST["title"]."','".$_POST["organizer"]."','".$_POST["speaker"]."','".$_POST["startdate"]."', '".$_POST["enddate"]."','".$_POST["time"]."', '".$_POST["location"]."', '".$_POST["info"]."', '".$_POST["name"]."', '".$_POST["phonenumber"]."','".$_POST["email"]."','".$_POST["website"]."',NOW(),'event manager-".$eventmanagerName."', 'N', 'Y')";
    }
	
	mysqli_query($conn, $q) or die(mysql_error());
	
    //$_SESSION['user'] =  mysqli_insert_id ($conn);
    header("Location: eventmanager.php");

?>