<?php

session_start();
include_once 'DBConnect.php';

$getTitle = $_POST['title'];
$getDetails = $_POST['details'];
$getUID = $_POST['id'];


if(empty($_FILES["picture"]["name"])){
		$fnm = null;
		
			 $sql = "UPDATE news SET title = '".$_POST["title"]."',  details = '".$_POST["details"]."'
              WHERE newsID=".$getUID;
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: viewNews.php?uid=".$getUID);
		
		
	}
	else{
		
    $fnm = time() . "_" . $_FILES["picture"]["name"];
	
	$res=mysqli_query($conn, "SELECT * FROM news WHERE newsID=".$getUID);
	$deletePhotoRow=mysqli_fetch_array($res);
	
	$deletePhoto = $deletePhotoRow['picture'];
	
				 $sql = "UPDATE news SET title = '".$_POST["title"]."',  details = '".$_POST["details"]."',  picture = '".$fnm."'
              WHERE newsID=".$getUID;
			    mysqli_query($conn, $sql) or die(mysql_error());
				
				header("Location: viewNews.php?uid=".$getUID);
	
	
		move_uploaded_file($_FILES["picture"]["tmp_name"], __DIR__."/picture/" . $fnm);
		

		
		unlink( __DIR__."/picture/".$deletePhoto."");
	
	//move_uploaded_file($_FILES["photo"]["tmp_name"],"/photo/".$fnm);
    //move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/".$fnm);
	
    }


	


?>


