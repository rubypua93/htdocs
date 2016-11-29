<?php

if(empty($_FILES["photo"]["name"])){
		$fnm = null;
		
		
	}
	else{
		
    $fnm = time() . "_" . $_FILES["photo"]["name"];
		move_uploaded_file($_FILES["photo"]["tmp_name"], __DIR__."/photo/" . $fnm);
	
	//move_uploaded_file($_FILES["photo"]["tmp_name"],"/photo/".$fnm);
    //move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/".$fnm);
	
    }
    require_once("DBConnect.php");
    $q = "insert into photo(photoName,create_date) values('".$fnm."',now())";
    mysqli_query($conn, $q) or die(mysql_error());
	
	
    
    header("Location: photoslideshow.php?photoname=$fnm");

?>