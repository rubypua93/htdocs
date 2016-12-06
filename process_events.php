<?php
	session_start();
    require_once("DBConnect.php");

	 //File
	 
			
		if(empty($_FILES["file"]["name"])){
		$fnm = null;
		
		
	}
	else{
		
    $fnm = time() . "_" . $_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], __DIR__."/events/" . $fnm);
	
	//move_uploaded_file($_FILES["file"]["tmp_name"],"/file/".$fnm);
    //move_uploaded_file($_FILES["file"]["tmp_name"], "file/".$fnm);
	
    }
	 
	
	
	if (isset($_SESSION['admin'])){
		$adminUserName  = $_SESSION['adminUserName'];
		$q = "insert into events(title, organizer, speaker, start_date, end_date, start_time, end_time, location, further_info, contact_name, contact_phone, contact_email,contact_website,file, create_date, created_by, admin_ind, em_ind,eventuuid) values('".$_POST["title"]."','".$_POST["organizer"]."','".$_POST["speaker"]."','".$_POST["startdate"]."', '".$_POST["enddate"]."','".$_POST["starttime"]."', '".$_POST["endtime"]."','".$_POST["location"]."', '".$_POST["info"]."', '".$_POST["name"]."', '".$_POST["phonenumber"]."','".$_POST["email"]."','".$_POST["website"]."','".$fnm."', NOW(),'admin-".$adminUserName."', 'Y', 'N',REPLACE(UUID(),'-',''))";
		
	
	// -- create loop to loop through all assigned eventmanager
	// get eventID from above insert query, then use the eventid and eventmanagerID to insert into event_eventmanager
	// get eventmanager email using the eventmanagerID
	// send email
	// -- end of loop
    }
	else{
		$name  = $_SESSION['eventmanagerName'];
		$q = "insert into events(title, organizer, speaker, start_date, end_date, start_time, end_time, location, further_info, contact_name, contact_phone, contact_email,contact_website,file, create_date, created_by, admin_ind, em_ind) values('".$_POST["title"]."','".$_POST["organizer"]."','".$_POST["speaker"]."','".$_POST["startdate"]."', '".$_POST["enddate"]."','".$_POST["time"]."', '".$_POST["location"]."', '".$_POST["info"]."', '".$_POST["name"]."', '".$_POST["phonenumber"]."','".$_POST["email"]."','".$_POST["website"]."','".$fnm."',NOW(),'event manager-".$eventmanagerName."', 'N', 'Y')";
    }
	
	
	
	mysqli_query($conn, $q) or die(mysql_error());
	
	$eventsID =  mysqli_insert_id ($conn);
	
	$res=mysqli_query($conn, "SELECT * FROM events WHERE eventsID=" .$eventsID);
	$eventRow=mysqli_fetch_array($res);
	
	$eventmanagerID = $_POST['eventmanagerID'];
foreach( $eventmanagerID as $key => $n ) {
    	  
	       

	        $q = "insert into event_eventmanager  (eventID,eventmanagerID) values  ('".$eventsID."','".$eventmanagerID[$key]."')";
    mysqli_query($conn, $q) or die(mysql_error());

			
}
	
	
	
	

	
	
	//$pic = "UPDATE events SET file = '".$fnm."'
      //         WHERE eventsID =" .$eventsID;
	 //mysqli_query($conn, $pic) or die(mysql_error());
    
    //$_SESSION['user'] =  mysqli_insert_id ($conn);
	
	//email start
	
	
	
	
	
	
	
	
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
You have been assigned to be the event manager of  ".$eventRow['title'].". Please click on this link to login to FSKTM Alumni Website: http://localhost/loginEM.php 
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    header("Location: viewEvents.php");

?>