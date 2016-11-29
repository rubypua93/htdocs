<?php
session_start();
include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
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

<body>
<div id="menu">
<ul>
  <li><a href="Home.php"><font face="verdana">Home</a></li>
  <li><a href="ChangePassword.php"><font face="verdana">My Account</a></li>
   <li><a href="ViewProfile.php"><font face="verdana">My Profile</a></li>
   <li><a href="search.php"><font face="verdana">Alumni Directory</a></li>
  <li><a href="alumni.php"><font face="verdana">Friend Network</a></li>
  <li><a href="alumni.php"><font face="verdana">Events</a>
  <img src="calendar.png" alt="calendar" style="width:80px; height:80px;" /></li>
  <li><a href="alumni.php"><font face="verdana">Survey</a></li>
   <li><a href="alumni.php"><font face="verdana">Testimonials</a></li>
  <li><a href="joblistalumni.php"><font face="verdana">Job Sharing</a></li>
  <li><a href="Logout.php?logout=1"><font face="verdana">Log out</a></font></li>
  <!-My calendar widget - HTML code - mycalendar.org --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a></div></noscript><script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1"></script></div><!-end of code-->
   
</ul>
</div>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
<div id="header">
  
  <img src="alumni.png" alt="fsktm" style="width:1110px; height:250px;" />
</div>


<form action="process_changepassword.php" method="post" enctype="multipart/form-data">
<h3>My Account</h3>
 <p></p>
	<p>  <label><font color="purple"><b>User Name: </b></font></label>
	   <?php echo $userRow['userName']; ?>
	   </p>
		<p> <label><font color="purple"><b>Email:  </b></font> </label><?php echo $userRow['email']; ?></p>
                            
		
							<p><label><font color="purple"><b>Password: </b></font> </label> 
                                <input type="password" name="password" required/>
                            </p>
                            <p>
                            <label><font color="purple"><b>Confirm Password: </b></font> </label> 
                            <input type="password" name="checkpassword" required/>
                            </p>
							
							 <input type="submit" /> </br>
							
		</form>
		
		<div class="w3-content w3-section" style="max-width:100px">
        </div>
    </div>
</div>
</body>


</html>











