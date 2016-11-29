<?php

session_start();
include_once 'DBConnect.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

?>


<html>
<head>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>
body {
    margin: 0;
}
li {
    text-align: center;
    border-bottom: 1px solid #555;
}

li:last-child {
    border-bottom: 1px solid #555;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: #ce33ff;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}



li a:hover:not(.active) {
    background-color: black;
    color: white;
}

form p label {
	display:block;
	float:left;
	width:200px;
	padding: 0px 0px 0px 0px;
}


</style>

</head>
<body>
<div id="menu">
<ul>
  <li><a href="Home.php"><font face="verdana">Home</a></li>
  <li><a href="ChangePassword.php"><font face="verdana">My Account</a></li>
   <li><a href="ViewProfile.php"><font face="verdana">My Profile</a></li>
   <li><a href="search.php"><font face="verdana">Alumni Directory</a></li>
  <li><a href="Home.php"><font face="verdana">Friend Network</a></li>
  <li><a href="Home.php"><font face="verdana">Events</a>
  <img src="calendar.png" alt="calendar" style="width:80px; height:80px;" /></li>
  <li><a href="Home.php"><font face="verdana">Survey</a></li>
   <li><a href="Home.php"><font face="verdana">Testimonials</a></li>
  <li><a href="joblistalumni.php"><font face="verdana">Job Sharing</a></li>
  <li><a href="Logout.php?logout=1"><font face="verdana">Log out</a></font></li>
  <!-My calendar widget - HTML code - mycalendar.org --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a></div></noscript><script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1"></script></div><!-end of code-->
   
</ul>
</div>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
<div id="header">
  
  <img src="alumni.png" alt="fsktm" style="width:1110px; height:250px;" />
</div>
       <br/> <h3> <label><font color="purple"><b>Search  Alumni </b></font></label> </h3> 
	  <?php
$name = $_POST['name'];

if (isset($_POST['name']) && $_POST['name']!="") {
    echo $_POST['name'];
    if (preg_match("/^[  a-zA-Z]+/", $_POST['name'])) {
        $res = mysqli_query($conn, "SELECT userID, email, userName, programme, major, graduateYear, phoneNum, address,fullName, profilepicture FROM user WHERE userName LIKE '" . $name . "%'");
        //userRow=mysqli_fetch_array($res);
    }
} else if (isset($_POST['programme']) && $_POST['programme']!="") {
    echo $_POST['programme'];
    $res = mysqli_query($conn, "SELECT userID, email, userName, programme, major, graduateYear, phoneNum, address,fullName, profilepicture FROM user WHERE programme LIKE '" . $_POST["programme"] . "'");
} else if (isset($_POST['major']) && $_POST['major']!="") {
     echo $_POST['major'];
    $res = mysqli_query($conn, "SELECT userID, email, userName, programme, major, graduateYear, phoneNum, address,fullName, profilepicture FROM user WHERE major LIKE '" . $_POST["major"] . "'");
} else {
    echo "Please select search area.";
}
	   if (isset($res) && mysqli_num_rows($res) > 0) {
    while ($userRow = mysqli_fetch_array($res)) {

        $userID = $userRow['userID'];
		$userName = $userRow['userName'];
        $email = $userRow['email'];
        $fullName = $userRow['fullName'];
        $programme = $userRow['programme'];
        $major = $userRow['major'];
        $graduateYear = $userRow['graduateYear'];
        $phoneNumber = $userRow['phoneNum'];
        $address = $userRow['address'];
        $profilePhoto = $userRow['profilepicture'];
        //$fullName=$userRow['fullName']; 
        $ID = $userRow['userID'];
        //-display the result of the array 
//        echo "<ul>\n";
		echo "</br>";
        echo "<a  href=\"ViewSearchProfile.php?userID=$userID\">" . $userName . "</a>\n";

      // echo "Full Name:\n" . $fullName . "\r\n";
        //echo "Programme:" . $programme . "\r\n";
        //echo "Major:" . $major . "\n";
       // echo "Graduate Year:" . $graduateYear . "\n";
        //echo "Phone Number:" . $phoneNumber . "\n";
        //echo "Address:" . $address . "\n";
        // $image = "uploads/". $userRow['profilepicture'];
        // echo "Profile Photo:<img src=".$image. "height=200 width=100> \n";
       // echo "</ul>";
		 //header("Location: ViewSearchProfile.php");
    }
	   }
	?>
	   <div class="w3-content w3-section" style="max-width:100px">
        </div>
    </div>
</div>
</body>
	  
	   
	   
</html> 









	



