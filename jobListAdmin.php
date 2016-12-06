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

<script type="text/javascript">
 function showhide(id) {
    var e = document.getElementById(id);
    e.style.display = (e.style.display == 'block') ? 'none' : 'block';
 }
</script>
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
 <style type="text/css">
   label {
	   float:left;
width:25%;
display:inline-block;	
}

#wgtmsr{
 width:200px;   
}

   #wgtmsr option{
  width:200px;   
}

    </style>

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

 <h3 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Job List</h3>
  <div align="center">
  
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div align="center">
            <select id="search" name = "search" onchange="CheckSearch(this)">
                <option value="jobtitle">Job Title</option>
                <option value="industry">Industry</option>
                <option value="state">State</option>
                <option value="" hidden selected>Please select what to search</option>
            </select>
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
			
			 <p style="text-align: center;"><input class="btn btn-primary" type="submit" name="submit" value="Search">  <font face="verdana">
  
  
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
	
	if(isset($_GET['submit'])) {
		$search = $_GET['search'];
		$jobtitle = $_GET['jobtitle'];
		if (isset($_GET['jobtitle']) && $_GET['jobtitle']!=""){
			echo "Search Item: " .$_GET['jobtitle'];
			$result = mysql_query("SELECT jobID,title,company,created_by,create_date,admin_ind FROM job WHERE title LIKE '" . $jobtitle . "%' order by create_date desc");
			$number = 1;
			echo "<br/>";
			echo "<br/>";
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
				if($row['5'] == 'N'){
					echo "  <tr><td>".$number.".</td> 
					<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>".$row['3']."</td> <td>".$row['4']."</td></tr>";
				}
				else{
					echo "  <tr><td>".$number.".</td> 
					<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>Admin</td> <td>".$row['4']."</td></tr>";
				}
			$number = $number + 1;
			}
		}
		
		else if (isset($_GET['industry']) && $_GET['industry']!="") {
			echo "Search Item: " .$_GET['industry'];
			$result = mysql_query("SELECT jobID,title,company,created_by,create_date,admin_ind FROM job WHERE industry LIKE '" . $_GET["industry"] . "'order by create_date desc");
			$number = 1;
			echo "<br/>";
			echo "<br/>";
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
				if($row['5'] == 'N'){
					echo "  <tr><td>".$number.".</td> 
					<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>".$row['3']."</td> <td>".$row['4']."</td></tr>";
				}
				else{
					echo "  <tr><td>".$number.".</td> 
					<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>Admin</td> <td>".$row['4']."</td></tr>";
				}
			$number = $number + 1;
			}
			
		}
		
		else if (isset($_GET['state']) && $_GET['state']!="") {
			echo "Search Item: " .$_GET['state'];
			$result = mysql_query("SELECT jobID,title,company,created_by,create_date,admin_ind FROM job WHERE state LIKE '" . $_GET["state"] . "'order by create_date desc");
			$number = 1;
			echo "<br/>";
			echo "<br/>";
	
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
				if($row['5'] == 'N'){
					echo "  <tr><td>".$number.".</td> 
					<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>".$row['3']."</td> <td>".$row['4']."</td></tr>";
				}
				else{
					echo "  <tr><td>".$number.".</td> 
					<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>Admin</td> <td>".$row['4']."</td></tr>";
				}
			$number = $number + 1;
			}
			
			
		}
		
		

	}

	else {
		$result = mysql_query("SELECT jobID,title,company,created_by,create_date,admin_ind FROM job order by create_date desc");
		$number = 1;
	
		while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
			if($row['5'] == 'N'){
				echo "  <tr><td>".$number.".</td> 
				<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>".$row['3']."</td> <td>".$row['4']."</td></tr>";
			}
			else{
				echo "  <tr><td>".$number.".</td> 
				<td> <a href='viewJobAdmin.php?uid=".$row['0']."'> ".$row['1']." </a> </td><td>".$row['2']."</td><td>Admin</td> <td>".$row['4']."</td></tr>";
			}
			$number = $number + 1;
		}
	
	}


	

?>

</table>
<br>
   <p style='text-align: center;'><a class='btn btn-primary' href="createjobAdmin.php"><font face="verdana"><b>Post a new job</b></a> </p>
    <?php 

   
?>

 <p style="text-align: center;"><a class="btn btn-primary" href="admin.php"><font face="verdana"><b>Back to Home</b></a> </p>
<br>
  
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