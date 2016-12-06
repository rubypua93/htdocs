<?php

$userID = $_POST['userID'];

	require_once("DBConnect.php");
	require("/lib/sendgrid-php/sendgrid-php.php");

foreach( $userID as $key => $n ) {
    	  
	       
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$userID[$key]);
$userRow=mysqli_fetch_array($res);
	

$from = new SendGrid\Email(null, "fsktmalumni@hotmail.com");
$to = new SendGrid\Email(null,$userRow['email']);
$subject = "Login information to UM FSKTM Alumni System";
$content = new SendGrid\Content("text/plain", "Hi ".$userRow['fullName']."! This is your login information for FSKTM Alumni System of University of Malaya. Please click on this link to login http://localhost/index.php \n Email address: ".$userRow['email']." \n Username: ".$userRow['userName']." \n Password: ".$userRow['password']."");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = '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';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();

// mysqli_query($conn, $q) or die(mysql_error());


	 $sql = "UPDATE user SET status = '0'	WHERE userID=".$userID[$key];
			    mysqli_query($conn, $sql) or die(mysql_error());
			
}
	
    
    header("Location: excelList.php");


?>