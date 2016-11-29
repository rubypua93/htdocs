

<?php

session_start();
include_once 'DBConnect.php';
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

    
	if(empty($_FILES["job"]["name"])){
		$fnm = null;
	}
	else{
		
    $fnm = time() . "_" . $_FILES["job"]["name"];
		move_uploaded_file($_FILES["job"]["tmp_name"], __DIR__."/job/" . $fnm);
	//move_uploaded_file($_FILES["job"]["tmp_name"],"/job/".$fnm);
    //move_uploaded_file($_FILES["job"]["tmp_name"], "job/".$fnm);
	
    }
	
	require_once("DBConnect.php");
    $q = "insert into job(title,industry,company,state,address, requirement,salary,jobscope,contact_name,contact_email,contact_phone,fax,website,file,created_by,create_date) values('".$_POST["title"]."','".$_POST["industry"]."','".$_POST["company"]."','".$_POST["state"]."','".$_POST["address"]."','".$_POST["requirement"]."','".$_POST["salary"]."' ,'".$_POST["jobscope"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["fax"]."','".$_POST["website"]."','".$fnm."', '".$userRow['userName']."',NOW() )";
    mysqli_query($conn, $q) or die(mysql_error());
	
	
    session_start();
    $_SESSION['user'] =  mysqli_insert_id ($conn);
    header("Location: joblistalumni.php");
	
	


?>