

<?php
session_start();
include_once 'DBConnect.php';
$res=mysqli_query($conn, "SELECT * FROM admin WHERE adminID=".$_SESSION['admin']);
$adminRow=mysqli_fetch_array($res);

$userRow=mysqli_fetch_array($res);
echo $userRow['fullName'];
echo $userRow['userID'];
    
	require_once("DBConnect.php");
    $q = "insert into job(createUserID, title,industry,otherIndustry, company,state, otherState, address, requirement,salary,jobscope,contact_name,contact_email,contact_phone,fax,website,file,created_by,create_date,admin_ind) 
		  values('".$_SESSION['admin']."','".$_POST["title"]."','".$_POST["industry"]."', '".$_POST["otherIndustry"]."','".$_POST["company"]."','".$_POST["state"]."', '".$_POST["otherState"]."','".$_POST["address"]."','".$_POST["requirement"]."','".$_POST["salary"]."' ,'".$_POST["jobscope"]."','".$_POST["contact_name"]."','".$_POST["contact_email"]."','".$_POST["contact_phone"]."','".$_POST["fax"]."','".$_POST["website"]."','".$fnm."', '".$adminRow['userName']."',NOW(), 'Y' )";
    mysqli_query($conn, $q) or die(mysql_error());
	
	$res =  mysqli_insert_id ($conn);
	
	$fnm = $res;
	move_uploaded_file($_FILES["attachment"]["tmp_name"], __DIR__."/job/" . $fnm);
	
		$file = "UPDATE job SET file = '".$fnm."'
               WHERE jobID =" .$res;
		mysqli_query($conn, $file) or die(mysql_error());
	 
	
	
   
    header("Location: createjobAdmin.php");
	
	


?>