<?php
session_start();
?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UM Alumni</title>
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
				<li><a href="admin.php">Approve Alumni</a></li>
                  <li><a href="admin.php">Directory</a></li>
                  <li><a href="admin.php">Testimonial</a></li>
                  <li><a href="admin.php">FYP Research</a></li>
                  <li><a href="admin.php">Generate Account</a></li>
                </ul>
              </li>
                <li><a href="admin.php">Report</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="admin.php">Manage Survey</a></li>
                  <li><a href="admin.php">Analysis Report</a></li>

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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Post a new job Advertisement</h2>
  <div align="center">  
  <form action="process_editjob.php" method="post" enctype="multipart/form-data" onSubmit="alert('Successful edited!');">

<script type="text/javascript">
function checkstate(name){
  if(name=='Other Country')document.getElementById('div1').innerHTML='<input type="text" name="state" />';
  else document.getElementById('div1').innerHTML='';
}
</script>  

<script type="text/javascript">
function checkindustry(name){
  if(name=='Others')document.getElementById('div2').innerHTML=' <input type="text" name="industry" />';
  else document.getElementById('div2').innerHTML='';
}
</script>  
   <p><label>Job Title: </label><input type="text" name="title" value="<?php echo $jobRow['title']; ?>" required/></p>
        <p><label>Industry: </label>
    
    <select name="industry" id="industry" onchange="checkindustry(this.options[selectedIndex].value)"> 
              <option selected="selected">
<?php echo $jobRow['industry']; ?>
</option>
               <option value="Computer and Information Technology">Computer and Information Technology</option>
               <option value="Finance and Accounting">Finance and Accounting</option>
               <option value="Aerospace and Defense">Aerospace and Defense </option>
                 <option value="Management and Consulting">Management and Consulting </option>
                 <option value="Transportation ">Transportation</option>
               <option value="Food and Agriculture">Food and Agriculture</option>
               <option value="Oil and Gas">Oil and Gas</option>
                <option value="Sciences">Sciences</option>
               <option value="Admin and Human Resources">Admin and Human Resources</option>
               <option value="Education and Training">Education and Training</option>
               <option value="Arts and Communication">Arts and Communication</option>
               <option value="Media and Advertisement">Media and Advertisement</option>
                <option value="Building and Construction">Building and Construction</option>
               <option value="Engineering">Engineering</option>
                <option value="Business">Business and Investment</option>
               <option value="Healthcare">Healthcare</option>
               <option value="Hotel and Restaurant">Hotel and Restaurant</option>
               <option value="Manufacturing">Manufacturing</option>
               <option value="Sales and Marketing">Sales and Marketing</option>
              
               <option value="Services">Services</option> 
                <option value="Others">Others</option> </select>
     <div id="div2"></div></p>
    
    </p>
     <p><label>Company name: </label><input type="text" name="company" value="<?php echo $jobRow['company']; ?>" required/></p>
      <p><label> State: </label>
        <select name="state" id="state" onchange="checkstate(this.options[selectedIndex].value)"> 
              <option selected="selected">
<?php echo $jobRow['state']; ?>
</option>
               <option value="Wilayah Persekutuan KL">Wilayah Persekutuan KL</option>
               <option value="Selangor">Selangor</option>
               <option value="Perlis">Perlis</option>
               <option value="Penang">Penang</option>
               <option value="Kedah">Kedah</option>
               <option value="Johor">Johor</option>
                <option value="Perak">Perak</option>
               <option value="Melaka">Melaka</option>
               <option value="Pahang">Pahang</option>
               <option value="Terengganu">Terengganu</option>
               <option value="Kelantan">Kelantan</option>
               <option value="Negeri Sembilan">Negeri Sembilan</option>
               <option value="Sabah">Sabah</option>
               <option value="Sarawak">Sarawak</option> 
                <option value="Other Country">Other Country</option></select></p>
                   <div id="div1"></div></p>
      
      </p>
      <p><label>Company address: </label><input type="text" name="address" value="<?php echo $jobRow['address']; ?>" required/></p>
       <p><label>Requirement: </label><textarea rows="4" cols="50" name="requirement" required/> <?php echo $jobRow['requirement']; ?></textarea>
        <p><label>Salary: </label><input type="text" name="salary" value="<?php echo $jobRow['salary']; ?>" required/></p>
       <p><label>Jobscope: </label><textarea rows="4" cols="50" name="jobscope" required/> <?php echo $jobRow['jobscope']; ?></textarea>
    <p><label> Contact Name: </label><input type="text" name="name" value="<?php echo $jobRow['contact_name']; ?>" required/>
    <p><label> Contact Email: </label><input type="text" name="email" value="<?php echo $jobRow['contact_email']; ?>" required/>
    <p><label> Contact Phone Number: </label><input type="text" name="phone" value="<?php echo $jobRow['contact_phone']; ?>" required/>
    <p><label> Fax:  </label><input type="text" name="fax" value="<?php echo $jobRow['fax']; ?>" required/>
    <p><label> Website: </label><input type="text" name="website" value="<?php echo $jobRow['website']; ?>" required/>
    <p><label>Upload File: </label>
    <?php
      $file = "job/". $jobRow['file'];
      if ($jobRow['file'] !=null){
      echo "<a href=" .$file. " download> Attachment </a>";
      }
      else{
        echo "No Attachment";
      }
        ?>  
    
    <p> <input type="file" name="file"/> </p>
    
    
  
  
    <p><label> Author: </label><?php echo $jobRow['created_by']; ?>
     <input type="hidden" name = "id" value = "<?php echo $jobRow['jobID']; ?>" ></p>
    <p>
    <input type="submit" value="Update"/></p>
    <p><a href="viewJob.php?uid=<?php echo $_GET['uid'] ?>"><font face="verdana">Back </a> </p>
    </form> 
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

