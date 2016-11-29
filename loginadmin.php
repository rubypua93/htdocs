<?php
session_start();
include_once 'DBConnect.php';


if(isset($_POST['btn-login']))
{
$email = mysqli_real_escape_string($conn, $_POST['email']);
 $upass = mysqli_real_escape_string($conn, $_POST['pass']);
 $res=mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
 $row=mysqli_fetch_array($res);
 if($row['password']==($upass))
 {
  $_SESSION['admin'] = $row['adminID'];
  $_SESSION['adminUserName'] = $row['userName'];
  header("Location: admin.php");
  
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}


?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login as Admin</title>
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

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

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

</head>
<body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      <div class="top">
        <div class="container">
          <span> Welcome to FSKTM Alumni Website</span>
 
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container">
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
       <h1 id="fh5co-logo" ><a href="homepage.php">
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
              <li class="active">
                <a href="loginadmin.php">Login</a>
              </li>
              <li><a href="register1.php">Sign Up</a></li>
              <li><a href="homepage.php">Home</a></li>
            </ul>
          </nav>
          </div>
        </div>
      </header>
      
    </div>
    

    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover text-center" style="background-image: url(images/background.jpg);">
        <div class="desc animate-box">
<h2>Login as Admin</h2>
<form method="post">
<table align="center" width="0%" border="0">
<tr>
<td><font face="verdana"><input type="text" style="color: black;" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><font face="verdana"><input type="password" style="color: black;" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><font face="verdana"><button type="submit" class="btn btn-primary"  name="btn-login"><font face="verdana">Sign In</button></td>
</tr>
<td><p><font face="verdana"><a href="index.php">Log in as alumni</a></font></p>
<p><font face="verdana"><a href="loginEM.php">Log in as event manager</a></font></p></td>



</table>
</form>
        </div>
      </div>

    </div>
    <!-- end:header-top -->
        <div id="fh5co-work-section">
       <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 animate-box">
            <h3 class="heading-section">Latest News And Announcements</h3>
            <p><a href="customViewNewsList.php">View All News</a></p>
          </div>
          <div class="col-lg-9 col-sm-12">
            <div class="row">
              <div class="col-lg-4 col-md-4">

<?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.details,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM news pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 1
;");




$newRow=mysqli_fetch_array($res);
?>

<?php


if(!empty($newRow)){
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow['picture'].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow['newsID']."'>
                    <div class='prod-title'>
                      <span>".$newRow['create_date']."</span>
                  <h3>".$newRow['title']."</h3>
                      <p>".$newRow['rpadString']."</p>
                    </div>
                  </a> 
                </div>";
}
    else{
echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow['picture'].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow['newsID']."'>
                    <div class='prod-title'>
                      <span></span>
                  <h3></h3>
                      <p>Blank</p>
                    </div>
                  </a> 
                </div>";

    }
?>


              </div>
              <div class="col-lg-4 col-md-4">
                <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.details,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM news pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 2
;");




$newRow=mysqli_fetch_array($res);
?>

<?php

if(!empty($newRow)){
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow['picture'].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow['newsID']."'>
                    <div class='prod-title'>
                      <span>".$newRow['create_date']."</span>
                  <h3>".$newRow['title']."</h3>
                      <p>".$newRow['rpadString']."</p>
                    </div>
                  </a> 
                </div>";

    }
        else{
echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow['picture'].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow['newsID']."'>
                    <div class='prod-title'>
                      <span></span>
                  <h3></h3>
                      <p>Blank</p>
                    </div>
                  </a> 
                </div>";

    }
?>
              </div>
              <div class="col-lg-4 col-md-4">
                <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.details,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM news pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 3
;");




$newRow=mysqli_fetch_array($res);
?>

<?php

if(!empty($newRow)){
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow['picture'].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow['newsID']."'>
                    <div class='prod-title'>
                      <span>".$newRow['create_date']."</span>
                  <h3>".$newRow['title']."</h3>
                      <p>".$newRow['rpadString']."</p>
                    </div>
                  </a> 
                </div>";

    }
    else{
echo"          <div class='fh5co-blog animate-box' style='background-image: url(../picture/".$newRow['picture'].");'>
                  <a class='image-popup' href='customViewNews.php?uid=".$newRow['newsID']."'>
                    <div class='prod-title'>
                      <span></span>
                  <h3></h3>
                      <p>Blank</p>
                    </div>
                  </a> 
                </div>";

    }
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<div id="fh5co-work-section">
       <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 animate-box">
            <h3 class="heading-section">Latest Events</h3>
 <p><a href ="customViewEventsList.php">View All Events</a></p>
          </div>
          <div class="col-lg-9 col-sm-12">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                                <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.further_info,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM events pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 1
;");




$newRow=mysqli_fetch_array($res);
?>

<?php
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(images/blog-1.jpg);'>
                  <a class='image-popup' href='customViewEvents.php?uid=".$newRow['eventsID']."'>
                    <div class='prod-title'>
                      <span>Date Start : ".$newRow['start_date']." <br>Date End : ".$newRow['end_date']."</span>
					  <br>
                  <h3>".$newRow['title']."</h3>
                      <p>".$newRow['rpadString']."</p>
                    </div>
                  </a> 
                </div>"
?>
              </div>
              <div class="col-lg-4 col-md-4">
                                               <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.further_info,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM events pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 2
;");




$newRow=mysqli_fetch_array($res);
?>

<?php
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(images/blog-2.jpg);'>
                  <a class='image-popup' href='customViewEvents.php?uid=".$newRow['eventsID']."'>
                    <div class='prod-title'>
                      <span>Date Start : ".$newRow['start_date']." <br>Date End : ".$newRow['end_date']."</span>
                  <h3>".$newRow['title']."</h3>
                      <p>".$newRow['rpadString']."</p>
                    </div>
                  </a> 
                </div>"
?>
              </div>
              <div class="col-lg-4 col-md-4">
                                               <?php

include_once 'DBConnect.php';


$res=mysqli_query($conn, "SELECT c.*,RPAD(c.further_info,150,'. ') rpadString
FROM
   (
      SELECT @row := @row + 1 AS row, pi.*
  FROM events pi, (SELECT @row:=0) x order by pi.create_date desc
   ) c
where c.row = 3
;");




$newRow=mysqli_fetch_array($res);
?>

<?php
      echo"          <div class='fh5co-blog animate-box' style='background-image: url(images/blog-3.jpg);'>
                  <a class='image-popup' href='customViewEvents.php?uid=".$newRow['eventsID']."'>
                    <div class='prod-title'>
                      <span>Date Start : ".$newRow['start_date']." <br>Date End : ".$newRow['end_date']."</span>
                  <h3>".$newRow['title']."</h3>
                      <p>".$newRow['rpadString']."</p>
                    </div>
                  </a> 
                </div>"
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fh5co-work-section -->


    </div>

    <div id="fh5co-blog-section">
            <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="fh5co-testimonial text-center animate-box">
              <h2>About us</h2>
              
              <blockquote>
                <p>FSKTM Alumni Website serves as a platform for alumni to communicate with each other and exchange thoughts which involving in different industry. We hope the faculty can engage with alumni easily with this interactive web application including distribute information in time and collect latest contacts of our alumni. </p>
              </blockquote>
              <span>FYP Team 2016/2017</span>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="fh5co-about-us animate-box">
              <h2 class="text-center">FSKTM's The Cube</h2>
              <img src="images/fsktm.jpg" alt="About Us">
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- fh5co-blog-section -->

  

  </div>
  <!-- END fh5co-page -->

  </div>
  <!-- END fh5co-wrapper -->

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



