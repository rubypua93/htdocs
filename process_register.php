<?php

include_once 'DBConnect.php';

  
    //Password validation 
    
   
  
	$check="SELECT * FROM user WHERE email = '".$_POST["email"]."'";
	$rs = mysqli_query($conn,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	
	 if($data[0] > 1) {
     echo "<script type='text/javascript'>alert('User already exists.'); window.history.back();</script>";
	}	
	
	else{
		
		 if($_POST["password"] != $_POST["checkpassword"]){
		echo "<script type='text/javascript'>alert('Password not the same.');window.history.back();</script>";
	}
	
    else if(strlen($_POST["password"]) < 5){
       
		echo "<script type='text/javascript'>alert('Password must be more than 5 characters.');window.history.back();</script>";
	}
	
    // Profile photo validation 
   // else if(file_exists($_FILES["profilephoto"]['tmp_name']) || is_uploaded_file($_FILES["profilephoto"]['tmp_name']))
	// {	 
	//echo"456";
	//	if($_FILES["profilephoto"]["error"] != 0){
			
	//		echo "<script type='text/javascript'>alert('Error uploading file. Please try again.');window.history.back();</script>";
	//	}
	//	
		//$ext = strtolower(substr($_FILES["profilephoto"]["name"], -4));
	//	if($ext != ".jpg"){
	//		$errors[] = "Upload jpg only";
	//	}
 // }
  
  else{
	  echo"123";
		echo $_POST["pictureURL"];
		$q = "insert into user(password, email, userName, programme, major, graduateYear, matricNum, phoneNum, address, fullName, occupation,status,profilepictureLink) values('".$_POST["password"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["programme"]."', '".$_POST["major"]."', '".$_POST["graduateyear"]."', '".$_POST["matricnumber"]."','".$_POST["phonenumber"]."', '".$_POST["address"]."', '".$_POST["fullname"]."', '".$_POST["occupation"]."','1','".$_POST["pictureURL"]."')";
		mysqli_query($conn, $q) or die(mysql_error());
	
		session_start();
		$res =  mysqli_insert_id ($conn);
	
	
		//Photo
		if(empty($_FILES["profilephoto"]["name"])){
			$fnm = null;
		}
		else{
		
			$fnm = $res;
			move_uploaded_file($_FILES["profilephoto"]["tmp_name"], __DIR__."/uploads/" . $fnm);
	
    }
	
		$pic = "UPDATE user SET profilepicture = '".$fnm."'
               WHERE userID =" .$res;
		mysqli_query($conn, $pic) or die(mysql_error());
	 
		//File
		$evidence = $res;
		move_uploaded_file($_FILES["evidence"]["tmp_name"], __DIR__."/evidence/" .  $evidence);
		
		$evidence1 = "UPDATE user SET evidence = '".$evidence."'
               WHERE userID =" .$res;
		mysqli_query($conn, $evidence1) or die(mysql_error());
	 
	 
	
	 echo "<script type='text/javascript'>alert('Registration Successful! Please wait for approval of admin to verify your application.')</script>";
	 echo "<script>setTimeout(\"location.href = 'index.php';\");</script>";
   // header("Location: index.php");
  }
	}
	

	
	
?>



