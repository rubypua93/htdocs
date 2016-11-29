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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumni - View all Jobs</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<div id="menu">
<ul>
  <li><a href="alumni.php"><font face="verdana">Home</a></li>
   <li><a href="ChangePassword.php"><font face="verdana">My Account</a></li>
      <li><a href="ViewProfile.php"><font face="verdana">My Profile</a></li>
   <li><a href="alumni.php"><font face="verdana">Alumni Directory</a></li>
  <li><a href="alumni.php"><font face="verdana">Friend Network</a></li>
  <li><a href="alumni.php"><font face="verdana">Events
  <img src="calendar.png" alt="calendar" style="width:40px; height:40px;" /></li></a>
  <li><a href="alumni.php"><font face="verdana">Survey</a></li>
   <li><a href="alumni.php"><font face="verdana">Testimonials</a></li>
 <li><a href="admin.php"><font face="verdana">FYP Research</a></li>
  <li class="dropdown">
    <a class="dropbtn"><font face="verdana">Job Advertisement Area</a>
    <div class="dropdown-content">
	<a href="joblistalumni.php">View All Jobs </a>
	 <a href="myjobalumni.php">View My Job List</a>
      <a href="createjobalumni.php">Post Job Advertisement</a>
     
    </div>
  <li><a href="Logout.php?logout=1"><font face="verdana">Log out</a></font></li>
  <!-My calendar widget - HTML code - mycalendar.org --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a></div></noscript><script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1"></script></div><!-end of code-->
   
</ul>
</div>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
<div id="header">
  
  <img src="alumni.png" alt="fsktm" style="width:1110px; height:250px;" />
</div>
  
  <h3>Joblist</h3>
  <table style = "width:80%" border = "1">
  <col width = "10%">
  <col width = "30%">
  <col width = "25%">
  <col width = "15%">
  <col width = "20%">
  
  <tr>
  <td>
  <b>Number</b>
  </td>
    <td>
  <b>Job Title</b>
  </td>
   <td>
  <b>Company</b>
  </td>
      <td>
  <b>Author</b>
  </td>
  <td>
  <b>Create Date</b>
  </td>
  </tr>
  </tr>

<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("alumnidatabase");

$result = mysql_query("SELECT jobID,title,company,created_by,create_date FROM job order by create_date desc");
$number = 1;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

echo "  <tr><td>".$number.".</td> 
			<td> <a href='viewJob.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>".$row['3']."</td> <td>".$row['4']."</td></tr>";

$number = $number + 1;

}

?>

</table>
   <p><a href="createjobalumni.php"><font face="verdana"><b>Post a new job</b></a> </p>
 
</div>
<p></p>


</body>
</html>