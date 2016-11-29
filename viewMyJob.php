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


p label {
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
<title>View my Jobs</title>

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


<?php

include_once 'DBConnect.php';

$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT * FROM job WHERE jobID=".$getUID);
$jobRow=mysqli_fetch_array($res);
?>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    </div>
    <div id="right">
     <div id="content">
       


<html>

<body>
<div id="header">
 <div id="left">

    </div>
    <div id="right">
     <div id="content">
       <p>  <h3>
	   <?php echo $jobRow['title']; ?></h3>
	   </p>
		<p> <label><font color="purple"><b>Industry:</b> </font></label><?php echo $jobRow['industry']; ?></p>
		<p> <label><font color="purple"><b>Company: </b> </font></label><?php echo $jobRow['company']; ?>    </p>
		<p> <label><font color="purple"><b>State/Other Country:</b> </font></label><?php echo $jobRow['state']; ?>    </p>
		 <label><font color="purple"><b>Company Address: </b> </font></label><p><?php echo nl2br($jobRow['address']); ?></p>
		<label> <font color="purple"><b>Requirements: </b> </font></label><p><?php echo nl2br ($jobRow['requirement']); ?></p>
		<p><label> <font color="purple"><b>Salary: </b> </font></label><?php echo $jobRow['salary']; ?></p>
		<label><font color="purple"><b>Jobscope: </b> </font></label> <p> <?php echo nl2br ($jobRow['jobscope']); ?></p>	
		<p> <label><font color="purple"><b>Contact Name: </b> </font></label><?php echo $jobRow['contact_name']; ?></p>
		<p> <label><font color="purple"><b>Contact Email address: </b> </font></label><?php echo $jobRow['contact_email']; ?></p>
				<p> <label><font color="purple"><b>Contact Phone number: </b> </font></label><?php echo $jobRow['contact_phone']; ?></p>
			<p> <label><font color="purple"><b>Fax: </b> </font></label><?php echo $jobRow['fax']; ?></p>
				<p> <label><font color="purple"><b>Website: </b> </font></label><?php echo $jobRow['website']; ?></p>
			<p><label><font color="purple"><b>File: </b> </font></label><p> </label>
			
			<?php
			$file = "job/". $jobRow['file'];
			if ($jobRow['file'] !=null){
			echo "<a href=" .$file. " download> Attachment </a>";
			}
			else{
				echo "No Attachment";
			}
				?>	
			<?php
			if(!isset($_SESSION['admin'])){
				if($jobRow['admin_ind'] == 'N'){
					echo "<p> <label><font color='purple'><b>Author:</b> </font> </label>".$jobRow['created_by']."</p>";
				}
				else{
					echo "<p> <label><font color='purple'><b>Author:</b> </font> </label>Admin</p>";
				}
			}
			else{
				echo "<p> <label><font color='purple'><b>Author:</b> </font> </label>".$jobRow['created_by']."</p>";
			}
				?>
				
					<p> <label><font color="purple"><b>Create date: </b> </font></label><?php echo $jobRow['create_date']; ?></p>
		
		
		
        </div>
    </div>
	<br/><p><a href="myjob.php"><font face="verdana">Back to my job list </a> </p>
	<?php 
			if(isset($_SESSION['admin']))
{
	echo "<p><a href='editMyJob.php?uid=".$getUID."'><font face='verdana'>Edit Job </a> </p>" ;
	echo	"<p><a href='deleteMyJobPerOne.php?uid=".$getUID."' onclick='return confirm('Are you sure want to delete this?')'><font face='verdana'>Delete </a> </p>";
}
else if($_SESSION['userName'] == $jobRow['created_by']){
	echo "<p><a href='editMyJob.php?uid=".$getUID."'><font face='verdana'>Edit Job </a> </p>" ;
	echo	"<p><a href='deleteMyJobPerOne.php?uid=".$getUID."' onclick='return confirm('Are you sure want to delete this?')'><font face='verdana'>Delete </a> </p>";
}
else{
	echo "<p></p>";
}

	?>
</div>
</body>
</html>