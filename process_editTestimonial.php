<?php
include_once 'DBConnect.php';




if ($_POST["content"] != ""){
	
	if ($_POST['action'] == 'Submit'){
	
		$sql = "UPDATE testimonial SET title = '".$_POST["title"]."',  content = '".$_POST["content"]."', status = '1'
				WHERE testimonial_ID =" .$_POST['testimonial_ID'];
		mysqli_query($conn, $sql) or die(mysql_error());
	
	}
	else if ($_POST['action'] == 'Save'){
		
		$sql = "UPDATE testimonial SET title = '".$_POST["title"]."',  content = '".$_POST["content"]."'	 
				WHERE testimonial_ID =" .$_POST['testimonial_ID'];
		mysqli_query($conn, $sql) or die(mysql_error());
	}
	
}
else {
	$message = "Please fill up the content";
	
	 echo "<script type='text/javascript'>alert('Action not sucessful. Please fill up the content.'); window.history.back();</script>";
}


if ($_POST['action'] == 'Delete'){
$sql = "DELETE  FROM testimonial WHERE testimonial_ID =" .$_POST['testimonial_ID'];
		mysqli_query($conn, $sql) or die(mysql_error());
}

header("Location: myTestimonialList.php");
//header("Location: {$_SERVER['HTTP_REFERER']}");

?>