<?php

session_start();
    
	//if(empty($_FILES["file"]["name"])){
	//	$fnm = null;
	//}
//	else{
		
//$fnm = time() . "_" . $_FILES["file"]["name"];
		//move_uploaded_file($_FILES["file"]["tmp_name"], __DIR__."/job/" . $fnm);
	//move_uploaded_file($_FILES["job"]["tmp_name"],"/job/".$fnm);
    //move_uploaded_file($_FILES["job"]["tmp_name"], "job/".$fnm);
	
  //  }

	require_once("DBConnect.php");
	if (isset($_SESSION['admin'])){
					$adminUserName  = $_SESSION['adminUserName'];
    $q = "insert into job(title,industry,company,state,address, requirement,salary,jobscope,contact_name,contact_email,contact_phone,fax,website,created_by,create_date,admin_ind) values('".$_POST["title"]."','".$_POST["industry"]."','".$_POST["company"]."','".$_POST["state"]."','".$_POST["address"]."','".$_POST["requirement"]."','".$_POST["salary"]."' ,'".$_POST["jobscope"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["fax"]."','".$_POST["website"]."','".$adminUserName."',NOW(),'Y' )";
    }
	else{
			$userName  = $_SESSION['userName'];
	$q = "insert into job(title,industry,company,state,address, requirement,salary,jobscope,contact_name,contact_email,contact_phone,fax,website,created_by,create_date) values('".$_POST["title"]."','".$_POST["industry"]."','".$_POST["company"]."','".$_POST["state"]."','".$_POST["address"]."','".$_POST["requirement"]."','".$_POST["salary"]."' ,'".$_POST["jobscope"]."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["fax"]."','".$_POST["website"]."','".$userName."',NOW() )";
		
		
	}
	mysqli_query($conn, $q) or die(mysql_error());
	
	$jobId =  mysqli_insert_id ($conn);
	
	$res=mysqli_query($conn, "SELECT * FROM job WHERE jobID=" .$jobId);
	$userRow=mysqli_fetch_array($res);
	
	//File
	if(empty($_FILES["file"]["name"])){
		$fnm = null;
	}
	else{
		
    $fnm = $userRow['jobID'];
		move_uploaded_file($_FILES["file"]["tmp_name"], __DIR__."/job/" . $fnm);
	
    }
	
	$pic = "UPDATE job SET file = '".$fnm."'
               WHERE jobID =" .$jobId;
	 mysqli_query($conn, $pic) or die(mysql_error());
	
	
	

    header("Location: joblist.php");
	
	


?>