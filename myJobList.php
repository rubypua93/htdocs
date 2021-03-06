<?php
session_start();
?>
<!DOCTYPE html>

<script type = "text/javascript">
            function CheckSearch(val) {
                //hide all elements
                var name = document.getElementById("jobtitle");
                name.style.display = "none";
                name.value = "";
                
                var programme = document.getElementById("industry");
                programme.style.display = "none";
                programme.value = "";
                
                var major = document.getElementById("state");
                major.style.display = "none";
                major.value = "";
                
                //depends on index selected, show the desired one
                if (val.selectedIndex === 0){
                     document.getElementById("jobtitle").style.display = "block";
                }else if(val.selectedIndex === 1){
                     document.getElementById("industry").style.display = "block";
                }else{                    
                     document.getElementById("state").style.display = "block";
                }
              
            }
         
        </script> 
 
 <style type="text/css">
   label {
	   float:left;
width:25%;
display:inline-block;	
}

#search{
 width:580px;  
font-family: Arial; font-size: 15pt; 
}

   #search option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}

#industry{
 width:580px;   
 font-family: Arial; font-size: 15pt; 
}

   #industry option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}

#state{
 width:580px;   
 font-family: Arial; font-size: 15pt; 
}

   #state option{
  width:580px;   
  font-family: Arial; font-size: 15pt; 
}

td{font-family: Arial; font-size: 15pt;}


    </style>

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

  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      <div class="top">
        <div class="container">
<?php

include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: signIn.php");
}
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
 <span> Welcome back,   <?php echo $userRow['userName']; ?></span>
          <span> <a href="Logout.php?logout=1">Log Out</a></span>
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container"> 	
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <h1 id="fh5co-logo" ><a href="index.html" style="color:#800080">FSKTM Alumni</a></h1>
            <!-- START #fh5co-menu-wrap -->
 <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
           <li><a href="alumni.php">Home</a></li>
			  
			  <li>
                    <a href="#" class="fh5co-sub-ddown">Alumni Area</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="myAccount.php">My Account</a></li>
					  <li><a href="myProfile.php">My Profile</a></li>
					   <li><a href="myWall.php">My Wall</a></li>
					   <li><a href="alumniDirectory1.php">Alumni Directory</a></li>
                  <li><a target="_blank">Friend Network</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="friendList.php">Friend List</a></li>
                      <li><a href="approveFriend.php" >Friend Request</a></li>
					   <li><a href="cancelFriendRequest.php" >Cancel Friend Request</a></li>
                      </ul>
					  <li><a target="_blank">Testimonial</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="testimonialList.php">Testimonial List</a></li>
                      <li><a href="myTestimonialList.php" >My Testimonial</a></li>
					   <li><a href="createTestimonial1.php">Create Testimonial</a></li>
                      </ul>
					    <li><a href="studentViewTitle.php">Answer Survey</a></li>
                    </ul>
                  </li>

                  <li>
                    <a href="#" class="fh5co-sub-ddown">News & Event</a>
                      <ul class="fh5co-sub-menu">
                      <li><a href="alumniViewNew.php">News & Announcement</a>
                      </li>
                      <li><a href="alumniViewEvent.php" target="_blank">View Events</a></li>
                    </ul>
                  </li>
                   
                <li> <a href="#" class="fh5co-sub-ddown">Job Area</a>
                <ul class="fh5co-sub-menu">
                  <li><a href="jobList.php">View All Jobs</a></li>
                  <li><a href="myJobList.php">View My Job</a></li>
                  <li><a href="createJob.php">Post Job</a></li>
                </ul>
              </li>
              
			  
                <li><a target="_blank">Research Collaboration</a>
                <ul class="fh5co-sub-menu">
				   <li><a href="researchTitleList.php">Title List</a>
				   <li><a href="researchMyTitleList.php">My Title List</a>
				   <li><a href="researchCreate.php">Propose Title</a>
				   
				   </li>
				    
				  
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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">My Job List</h2>
  <div align="center">
  
 <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div align="center">
            
            <br><br>
            <input  type="text" name="jobtitle" id="jobtitle" size ="95" style="display: none" > 

            <select name="industry" id="industry" style="display: none">
              <option selected="selected">Computer and Information Technology</option>
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
                <option value="Others">Others</option> 
                <option value="" hidden selected>Please select an industry</option> 
            </select>

            <select name="state" id="state" style="display: none">
                 <option selected="selected">Wilayah Persekutuan KL</option>
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
               <option value="Other Country">Other Country</option>
                <option value="" hidden selected>Please select a state</option>
            </select>
			<br/>
			
		
  
  
   </div>
        </form> 
  <br/>
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
	
		$result = mysql_query("SELECT jobID,title,company,created_by,create_date,admin_ind FROM job  WHERE createUserID = '".$_SESSION['user']."' AND admin_ind = 'N' order by create_date desc");
		$number = 1;
	
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			if($row['5'] == 'N'){
				echo "  <tr><td>".$number.".</td> 
				<td> <a href='jobEdit.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>".$row['3']."</td> <td>".$row['4']."</td></tr>";
			}
			else{
				echo "  <tr><td>".$number.".</td> 
				<td> <a href='jobEdit.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>Admin</td> <td>".$row['4']."</td></tr>";
			}
			$number = $number + 1;
		}
	
	
?>

</table>
<br>
<br/>
<br/>
   <p style='text-align: center;'><a class='btn btn-primary' href="createjob.php"><font face="verdana"><b>Post a new job</b></a> </p>
    <?php 

    if(isset($_SESSION['admin']))
{
 echo "<p style='text-align: center;'><a class=btn btn-primary' href='deletejob.php'><font face='verdana'><b>Delete jobs</b></a> </p>";
 
}
?>

<br>
 <p style="text-align: center;"><a class="btn btn-primary" href="alumni.php"><font face="verdana"><b>Back to Home</b></a> </p>	
  
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