<?php
session_start();
?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FSKTM Alumni</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->



  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Superfish -->
  <link rel="stylesheet" href="css/superfish.css">

  <link rel="stylesheet" href="css/style.css">


  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<STYLE TYPE="text/css">

td{font-family: Arial; font-size: 15pt;}

</STYLE>
  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      <div class="top">
        <div class="container">
<?php

include_once 'DBConnect.php';

if(!isset($_SESSION['admin']))
{
 header("Location: loginadmin.php");
}
$res=mysqli_query($conn, "SELECT * FROM admin WHERE adminID=".$_SESSION['admin']);
$adminRow=mysqli_fetch_array($res);
?>

                   <span> Welcome back, admin - <?php echo $adminRow['userName']; ?></span>
           <span><a href="Logoutadmin.php?logout=1"><font face="verdana">Log out</a></font></span>
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container">
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
               <h1 id="fh5co-logo" ><a href="admin.php">
			   <!--logo -->
			   <?php

include_once 'DBConnect.php';

$res=mysqli_query($conn, "SELECT fileName FROM logo where name = 'logo' limit 1");
$adminRow=mysqli_fetch_array($res);
			  echo  "<img src='logo/".$adminRow['fileName']."' alt='fsktm' style='width:90px;height:95px;'></a></h1>";
			   ?>
			    <!--logo -->
            <!-- START #fh5co-menu-wrap -->
<nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="admin.php">Home</a></li>
   <li><a href="admin.php">Manage Alumni</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="directoryAdmin.php">Directory</a></li>
                    <li><a target="_blank">Testimonial</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="testimonialListAdmin.php">Testimonial List</a></li>
                      <li><a href="approveTestimonial.php" >Approve Testimonial</a></li>
                      </ul>
                  <li><a href="researchTitleListAdmin.php">FYP Research</a></li>
                  <li><a href="index_excel.php">Generate Account</a></li>
				  <li><a href="approvingAlumni.php">Approve Alumni</a></li>
                </ul>
              </li></li>
                 
                  <li>
                    <a href="admin.php">News & Event</a>
                      <ul class="fh5co-sub-menu">
                      <li><a target="_blank">News & Announcement</a>
                      <ul class="fh5co-sub-menu">
					  <li><a href="logo.php">Change Logo</a></li>
                      <li><a href="photoadmin.php">Upload Photo</a></li>
                      <li><a href="news.php">View News</a></li>

                      </ul>
					  
                      </li>
                      <li><a target="_blank">Manage Events</a>
					    <ul class="fh5co-sub-menu">
						 <li><a href="viewEvents.php">View Events</a></li>
                      <li><a href="assignEM.php">Create Event Manager</a></li></li>

                      </ul>
                    </ul>
                  </li>
                   
               
             
                <li><a href="admin.php">Report</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="survey.php">Manage Survey</a></li>
                  <li><a href="report.php">Analysis Report</a></li>

                </ul>
              </li>
             <li><a href="admin.php">Job </a>
                <ul class="fh5co-sub-menu">
                  <li><a href="jobListAdmin.php">All Jobs</a></li>
                  <li><a href="myJobListAdmin.php">My Jobs</a></li>
                  <li><a href="createJobAdmin.php">Post Job</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          </div>
        </div>
      </header>
      
    </div>
    <div class="fh5co-hero" style="height:100%;">
      <div class="fh5co-overlay" style="height:100%;z-index:0;"></div>
      <div style="background-image: url(images/background.jpg); background-size: cover;">
        <div class="desc animate-box" style = "padding-top: 200px;padding-left:10%;padding-right:10%;">
          


<div style = "background: rgba(255, 255, 255, 0.9);">
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">View Report of Surveys</h2>
  <div align="center">
  <table style = 'width:90%' border = '1' align = 'center'> 
  <tr>
  <td>
  No.
  </td>
    <td>
	Title
  </td>
    <td>
	Status
  </td>
  
  </tr>
<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("alumnidatabase");
$result = mysql_query("SELECT id,titledescp,status FROM surverytitle");
$number = 1;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

echo " 
			<tr><td width = '10%'>".$number."</td><td><a href = 'viewReportQuestion.php?titleId=".$row['0']."'> ".$row['1']."</a></td> ";
if($row['2'] == 'Y'){
echo			"<td>Activated</td> ";
}			
else{
echo			"<td>Deactivated</td> ";
}
$number = $number + 1;

}

?>
 
  </table> <br>
 <br/>
	   <br/>
	    <br/>
	   <br/>
	    <br/>
	   <br/>
	    <br/>
	   <br/>
	    <br/>
	   <br/>
	    <br/>
	   <br/>
	     

</div>
</div>
        </div>
      </div>

    </div>
   

  <!-- jQuery -->


  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>

  </body>
</html>

