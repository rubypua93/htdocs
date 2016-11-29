<?php

session_start();
include_once 'DBConnect.php';

$getTitle = $_POST['title'];
$getOrganizer = $_POST['organizer'];
$getSpeaker = $_POST['speaker'];
$getStartdate = $_POST['startdate'];
$getEnddate = $_POST['enddate'];
$getTime = $_POST['time'];
$getLocation = $_POST['location'];
$getInfo = $_POST['info'];
$getName = $_POST['name'];
$getPhonenumber = $_POST['phonenumber'];
$getEmail = $_POST['email'];
$getWebsite = $_POST['website'];
$getUID = $_POST['id'];


if(empty($_FILES["file"]["name"])){
	
	 $sql = "UPDATE events SET title = '".$getTitle."',  organizer = '".$getOrganizer."', speaker = '".$getSpeaker."',  start_date = '".$getStartdate."'
	 ,  end_date = '".$getEnddate."', time = '".$getTime."', location = '".$getLocation."',  further_info = '".$getInfo."'
	 ,  contact_name = '".$getName."',   contact_phone = '".$getPhonenumber."', contact_email = '".$getEmail."',   contact_website = '".$getWebsite."'

				
			  WHERE eventsID=".$getUID;
}
else{
	 $fnm = time() . "_" . $_FILES["photo"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], __DIR__."/events/" . $fnm);
		
		
		
$res=mysqli_query($conn, "SELECT * FROM events WHERE eventsID=".$getUID);
$eventFileRow=mysqli_fetch_array($res);
		
		
	$oldfnm =	$eventFileRow['file'];
		
		unlink( __DIR__."/events/".$oldfnm."");
		
	 $sql = "UPDATE events SET title = '".$getTitle."',  organizer = '".$getOrganizer."', speaker = '".$getSpeaker."',  start_date = '".$getStartdate."'
	 ,  end_date = '".$getEnddate."', time = '".$getTime."', location = '".$getLocation."',  further_info = '".$getInfo."'
	 ,  contact_name = '".$getName."',   contact_phone = '".$getPhonenumber."', contact_email = '".$getEmail."',   contact_website = '".$getWebsite."'
		,   file = '".$fnm."'
				
			  WHERE eventsID=".$getUID;	
}
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: eventmanagerViewPerEvents.php?uid=".$getUID);

?>