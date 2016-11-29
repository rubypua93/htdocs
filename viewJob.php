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
               <h1 id="fh5co-logo" ><a href="admin.php" style="color:#800080">FSKTM Alumni</a></h1>
            <!-- START #fh5co-menu-wrap -->
<nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="admin.php">Home</a></li>

                 
                  <li>
                    <a href="#" class="fh5co-sub-ddown">News & Event</a>
                      <ul class="fh5co-sub-menu">
                      <li><a target="_blank">News & Announcement</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="photoadmin.php">Upload Photo</a></li>
                      <li><a href="news.php">View News</a></li>

                      </ul>
                      </li>
                      <li><a target="_blank">Manage Events</a>
					    <ul class="fh5co-sub-menu">
						 <li><a href="viewEvents.php">View Events</a></li>
                      <li><a href="assignEM.php">Assign Event Manager</a></li></li>

                      </ul>
                    </ul>
                  </li>
                   
                <li><a href="admin.php">Job Area</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="joblist.php">View All Jobs</a></li>
                  <li><a href="joblistalumni.php">View My Job List</a></li>
                  <li><a href="createjob.php">Post Job Advertisement</a></li>
                </ul>
              </li>
                <li><a href="admin.php">Manage Alumni</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="admin.php">Directory</a></li>
                  <li><a href="admin.php">Testimonial</a></li>
                  <li><a href="admin.php">FYP Research</a></li>
                  <li><a href="index_excel.php">Generate Account</a></li>
                </ul>
              </li>
                <li><a href="admin.php">Report</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="survey.php">Manage Survey</a></li>
                  <li><a href="report.php">Analysis Report</a></li>

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
          
<?php

include_once 'DBConnect.php';

$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT * FROM job WHERE jobID=".$getUID);
$jobRow=mysqli_fetch_array($res);
?>

<div style = "background: rgba(255, 255, 255, 0.9);">
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;"><?php echo $jobRow['title']; ?></h2>
  <div align="center">  
  
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
      
      </p>
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
    <br>

  
   <p><a href="joblist.php"><font face="verdana"><b>Back to job list</b></a> </p>
  
  <?php 
      if(isset($_SESSION['admin']))
{
  echo "<p><a href='editJob.php?uid=".$getUID."'><font face='verdana'>Edit Job </a> </p>" ;
  echo  "<p><a href='deleteJobPerOne.php?uid=".$getUID."' onclick='return confirm('Are you sure want to delete this?')'><font face='verdana'>Delete </a> </p>";
}
else if($_SESSION['userName'] == $jobRow['created_by']){
  echo "<p><a href='editJob.php?uid=".$getUID."'><font face='verdana'>Edit Job </a> </p>" ;
  echo  "<p><a href='deleteJobPerOne.php?uid=".$getUID."' onclick='return confirm('Are you sure want to delete this?')'><font face='verdana'>Delete </a> </p>";
}
else{
  echo "<p></p>";
}

  ?>  
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

