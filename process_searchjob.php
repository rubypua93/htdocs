<!DOCTYPE html>
<html>
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

li a,.dropbtn {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}


li a:hover:not(.active),dropdown:hover .dropbtn {
    background-color: black;
    color: white;
}




li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}


form p label {
	display:block;
	float:left;
	width:250px;
	padding: 0px 0px 0px 0px;
}




img
{
    max-width: 100%;
    height: auto;
}


</style>
</head>
<head>

<title>Job search result</title>

</head>
<div id="menu">
<ul>
 
 <?php 
 session_start();

  	if(isset($_SESSION['admin']))
{
  echo "
   <li><a href='admin.php'><font face='verdana'>Home</a></li>
  <li class='dropdown'>
    <a class='dropbtn'><font face='verdana'>News and Annoucements</a>
    <div class='dropdown-content'>
      <a href='photoadmin.php'>Upload Photo</a>
      <a href='news.php'>Update News and Annoucement</a>
    </div>
  
   <li><a href='admin.php'><font face='verdana'>Alumni Directory</a></li>
   <li><a href='events.php'><font face='verdana'>Events
  <img src='calendar.png' alt='calendar' style='width:60px; height:60px;' /></li></a>
	<li><a href='admin.php'><font face='verdana'>Manage Survey</a></li>
	<li><a href='admin.php'><font face='verdana'>Analysis Report</a></li>
    <li><a href='admin.php'><font face='verdana'>Manage Testimonial</a></li>
	<li><a href='admin.php'><font face='verdana'>FYP Research</a></li>
	";
}

else{
	echo "
	 <li><a href='alumni.php'><font face='verdana'>Home</a></li>
	   <li><a href='ChangePassword.php'><font face='verdana'>My Account</a></li>
	   <li><a href='ViewProfile.php'><font face='verdana'>My Profile</a></li>
   <li><a href='alumni.php'><font face='verdana'>Alumni Directory</a></li>
   <li><a href='alumni.php'><font face='verdana'>Friend Network</a></li>
   <li><a href='alumni.php'><font face='verdana'>Events
   <img src='calendar.png' alt='calendar' style='width:40px; height:40px;' /></li></a>
   <li><a href='alumni.php'><font face='verdana'>Survey</a></li>
   <li><a href='alumni.php'><font face='verdana'>Testimonials</a></li>
   <li><a href='alumni.php'><font face='verdana'>FYP Research</a></li>";
}

?>
	 
  <li class="dropdown">
    <a class="dropbtn"><font face="verdana">Job Advertisement Area</a>
    <div class="dropdown-content">
	<a href="joblist.php">View All Jobs </a>
	 <a href="myjob.php">View My Job List</a>
      <a href="createjob.php">Post Job Advertisement</a>
     
    </div>
   <li><a href="homepage.php"><font face="verdana">Log out</a></font></li>
  <!-My calendar widget - HTML code - mycalendar.org --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:120px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a></div></noscript><script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1"></script></div><!-end of code-->
  </ul> 
</div>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
<div id="header">
  
  



  <img src="alumni.png" alt="fsktm" style="width:1110px; height:250px;" />
</div>



       <br/> <h3> <label><font color="purple"><b>Search  Result </b></font></label> </h3> 
	  <?php
	  include_once 'DBConnect.php';
$jobtitle = $_GET['jobtitle'];

if (isset($_GET['jobtitle']) && $_GET['jobtitle']!="") {
    echo $_GET['jobtitle'];
    if (preg_match("/^[  a-zA-Z]+/", $_GET['jobtitle'])) {
        $res = mysqli_query($conn, "SELECT * FROM job WHERE title LIKE '" . $jobtitle . "%'");
        //userRow=mysqli_fetch_array($res);
    }
} else if (isset($_GET['industry']) && $_GET['industry']!="") {
    echo $_GET['industry'];
    $res = mysqli_query($conn, "SELECT * FROM job WHERE industry LIKE '" . $_GET["industry"] . "'");
} else if (isset($_GET['state']) && $_GET['state']!="") {
     echo $_GET['state'];
    $res = mysqli_query($conn, "SELECT * FROM job WHERE state LIKE '" . $_GET["state"] . "'");
} else {
    echo "Please select search area.";
}
	   if (isset($res) && mysqli_num_rows($res) > 0) {	
    while ($userRow = mysqli_fetch_array($res)) {

        $jobID = $userRow['jobID'];
		$title = $userRow['title'];
		
		echo "</br></br>";
		
        echo "<a  href=\"viewJob.php?uid=$jobID\">" . $title . "</a>\n";

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
	
	<br/><br/><br/><p><a href="joblist.php"><font face="verdana">Back to joblist </a> </p>
	
    </div>
</div>
</body>
	  
	   
	   
</html> 









	



