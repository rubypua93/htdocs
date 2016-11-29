<?php

if(empty($_FILES["photo"]["name"])){
		$fnm = null;
		
		
	}
	else{
		
    $fnm = time() . "_" . $_FILES["photo"]["name"];
		move_uploaded_file($_FILES["photo"]["tmp_name"], __DIR__."/logo/" . $fnm);
	
	//move_uploaded_file($_FILES["photo"]["tmp_name"],"/photo/".$fnm);
    //move_uploaded_file($_FILES["photo"]["tmp_name"], "photo/".$fnm);
	
    }
    require_once("DBConnect.php");

	$res=mysqli_query($conn, "SELECT id,fileName FROM logo where name = 'logo'");
$adminRow=mysqli_fetch_array($res);



    $q = "insert into logo(filename,name) values('".$fnm."','logo')";
    mysqli_query($conn, $q) or die(mysql_error());
	
		$a = "delete from logo where id = ".$adminRow['id']."";
    mysqli_query($conn, $a) or die(mysql_error());
    			unlink( __DIR__."/logo/".$adminRow['fileName']."");
    header("Location: admin.php");

?>