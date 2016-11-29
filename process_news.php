<?php

	session_start();
    require_once("DBConnect.php");

   
	if(empty($_FILES["picture"]["name"])){
		$fnm = null;
	}
	else{
		
    $fnm = time() . "_" . $_FILES["picture"]["name"];
		move_uploaded_file($_FILES["picture"]["tmp_name"], __DIR__."/picture/" . $fnm);
	//move_uploaded_file($_FILES["picture"]["tmp_name"],"/picture/".$fnm);
    //move_uploaded_file($_FILES["picture"]["tmp_name"], "picture/".$fnm);
	
    }
	
	
    $q = "insert into news(title,details,picture,create_date) values('".$_POST["title"]."','".$_POST["details"]."', '".$fnm."', NOW() )";
    mysqli_query($conn, $q) or die(mysql_error());
	
	
  
	
   
    header("Location: news.php");
	
	


?>