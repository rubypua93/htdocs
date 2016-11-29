<?php



    if(empty($_POST)) { exit; }
    
    $errors = array();
	
	//Email validation
	//if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	//$errors[]="Email is a not valid";
//}
    
    //Password validation 
    
    if($_POST["password"] != $_POST["checkpassword"])
        $errors[] = "Password is not the same.";
    if(strlen($_POST["password"]) < 5)
        $errors[] = "Password must be more than 5 characters.";
	
	
  
   
        
    //Show errors
    
    if( ! empty($errors))
    {
        echo "<b>Error(s):</b><hr />";
        foreach($errors as $e) {
            echo "<li>".$e."</li>";
        }
        exit;
    }
	
	
    require_once("DBConnect.php");
    $q = "insert into eventmanager(name, email, password, create_date) values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."',NOW())";
    mysqli_query($conn, $q) or die(mysql_error());
	
	
    session_start();
    $_SESSION['admin'] =  mysqli_insert_id ($conn);
    header("Location: eventmanagerlist.php");

?>


