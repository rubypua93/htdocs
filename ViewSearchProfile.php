<?php
session_start();
include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}

if(isset($_GET['userID'])){ 
	$searchid=$_GET['userID']; 
	
}

$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_GET['userID']);
$userRow=mysqli_fetch_array($res);
?>

<script>
function goBack() {
    window.history.go(-1);
}
</script>

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

p label {
	display:block;
	float:left;
	width:200px;
	padding: 0px 0px 0px 0px;
}


</style>
</head>

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


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
   
    </div>
    <div id="right">
     <div id="content">
        <h3> Hi <?php echo $userRow['userName']; ?></h3>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Profile - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<form>


<div id="header">
 <div id="left">
    <label>My Profile</label>
    </div>
    <div id="right">
     <div id="content">
       <p>  <label><font color="purple"><b>Name: </b></font></label>
	   <?php echo $userRow['userName']; ?>
	   </p>
		<p> <label><font color="purple"><b>Email:  </b></font> </label><?php echo $userRow['email']; ?></p>
		<p> <label><font color="purple"><b>Programme:  </b></font> </label><?php echo $userRow['programme']; ?>    </p>
		<p><label> <font color="purple"><b>Major:  </b></font> </label><?php echo $userRow['major']; ?></p>
		<p><label><font color="purple"><b>Graduate Year:  </b></font> </label><?php echo $userRow['graduateYear']; ?></p>
		<p><label><font color="purple"><b>Phone Number:  </b></font> </label><?php echo $userRow['phoneNum']; ?></p>
		<p> <label><font color="purple"><b>Address:  </b></font> </label><?php echo $userRow['address']; ?></p>
		
<p> <label><font color="purple"><b>Profile Picture:  </b></font> </label>
		<?php
                    $image = "uploads/". $userRow['profilepicture'];
					
					 if ($userRow['profilepicture'] !=null){
					$image1 = $image;
		} 
		else{
			
			$image1 = "uploads/noprofilepicture.png";
		}		
		?>
                
		<img src=<?= $image1 ?> height=100 width=100">
		</p>
		
		<?php echo "<a href='" . $_SERVER['HTTP_REFERER'] ."' >Link back</a>";
		?>
		
		<button type="button" name="Back" onClick="goBack()'">Back </button>
		
		
		
		
		
        </div>
    </div>
</div>
</form>
</body>
</html>
































