<?php

session_start();
include_once 'DBConnect.php';

$getTitle = $_POST['title'];
$getOrganizer = $_POST['organizer'];
$getSpeaker = $_POST['speaker'];
$getStartdate = $_POST['startdate'];
$getEnddate = $_POST['enddate'];
$getStartTime = $_POST['start_time'];
$getEndTime = $_POST['end_time'];
$getLocation = $_POST['location'];
$getInfo = $_POST['info'];
$getName = $_POST['name'];
$getPhonenumber = $_POST['phonenumber'];
$getEmail = $_POST['email'];
$getWebsite = $_POST['website'];
$getUID = $_POST['id'];


if(empty($_FILES["file"]["name"])){
	
	 $sql = "UPDATE events SET title = '".$getTitle."',  organizer = '".$getOrganizer."', speaker = '".$getSpeaker."',  start_date = '".$getStartdate."'
	 ,  end_date = '".$getEnddate."', start_time = '".$getStartTime."', end_time = '".$getEndTime."',location = '".$getLocation."',  further_info = '".$getInfo."'
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
	 ,  end_date = '".$getEnddate."', start_time = '".$getStartTime."',end_time = '".$getEndTime."', location = '".$getLocation."',  further_info = '".$getInfo."'
	 ,  contact_name = '".$getName."',   contact_phone = '".$getPhonenumber."', contact_email = '".$getEmail."',   contact_website = '".$getWebsite."'
		,   file = '".$fnm."'
				
			  WHERE eventsID=".$getUID;	
}
			    mysqli_query($conn, $sql) or die(mysql_error());

				 $q = "delete from event_eventmanager where eventID = '".$getUID."'";
    mysqli_query($conn, $q) or die(mysql_error());
				
$eventmanagerID = $_POST['eventmanagerID'];
foreach( $eventmanagerID as $key => $n ) {
    	  
	       

	        $q = "insert into event_eventmanager  (eventID,eventmanagerID) values  ('".$getUID."','".$eventmanagerID[$key]."')";
    mysqli_query($conn, $q) or die(mysql_error());

			
}
				
	$eventmanagerID = $_POST['eventmanagerID'];
	
	
		require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");

foreach( $eventmanagerID as $key => $n ) {
    	  
	       
$res=mysqli_query($conn, "SELECT * FROM eventmanager WHERE eventmanagerID=".$eventmanagerID[$key]);
$managerRow=mysqli_fetch_array($res);
	

$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
$to = new SendGrid\Email(null,$managerRow['email']);
$subject = "Assignation of Event Manager";
$content = new SendGrid\Content("text/plain", "Hi ".$managerRow['name']."! 
You have been assigned to be the event manager of  ".$_POST['title'].". Please click on this link to login to FSKTM Alumni Website: http://localhost/loginEM.php 
\n Email address: ".$managerRow['email']."  \n Password: ".$managerRow['password'].  "");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

// mysqli_query($conn, $q) or die(mysql_error());

			
}
	
	
				
				
				
				
				header("Location: adminViewPerEvents.php?uid=".$getUID);

?>