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
          
<?php

include_once 'DBConnect.php';

$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT * FROM events WHERE eventsID=".$getUID);
$eventsRow=mysqli_fetch_array($res);
?>

<div style = "background: rgba(255, 255, 255, 0.9);">
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Update event</h2>
  <div align="center">  
  <form action="process_editevents.php" method="post" enctype="multipart/form-data" onSubmit="alert('Successful edited!');">

 
   <p><label> <font color="purple">*Title: </font></label><input type="text"  size="70" name="title" value="<?php echo $eventsRow['title']; ?>" required/></p>
         <p><label><font color="purple"><b>*Organizer: </b></font> </label> 
           <input type="text" size="70" name="organizer" value="<?php echo $eventsRow['organizer']; ?>" required/></p>
              
       
                
               
               <p>
                             <p><label><font color="purple"> *Speaker: </font></label><input type="text" size="70" name="speaker" value="<?php echo $eventsRow['speaker']; ?>" required/></p>
                           </p>
               
                <p><label><font color="purple"> *Start Date: </font></label><input type="date" size="70" id="startDate" name="startdate" value="<?php echo $eventsRow['start_date']; ?>" required/></p>
              
              
              
               
             <p><label><font color="purple"> *End Date: </font></label><input type="date" size="70" id="endDate" name="enddate" value="<?php echo $eventsRow['end_date']; ?>" required/></p>
			   <p><label><font color="purple"> *Start Time: </font></label><input type="text" size="70" name="start_time" value="<?php echo $eventsRow['start_time']; ?>" required/></p>
			    <p><label><font color="purple"> *End Time: </font></label><input type="text" size="70" name="end_time" value="<?php echo $eventsRow['end_time']; ?>" required/></p>
                 <p><label><font color="purple"> *Location: </font></label><input type="text" size="70" name="location" value="<?php echo $eventsRow['location']; ?>" required/></p>
                           
						   <p><label><font color="purple">Further Info:</font> </label><textarea rows="3" cols="70" name="info" > <?php echo $eventsRow['further_info']; ?></textarea>
						   
              
              
           
               
                 <p><label><font color="purple"> *Contact Name: </font></label><input type="text" size="70" name="name" value="<?php echo $eventsRow['contact_name']; ?>" required/></p>
             <p><label><font color="purple"> *Contact Phone Number: </font></label><input type="text" size="70" name="phonenumber" value="<?php echo $eventsRow['contact_phone']; ?>" required/></p>
              
      
               
                 <p><label><font color="purple"> *Email Address: </font></label><input type="text" size="70" name="email" value="<?php echo $eventsRow['contact_email']; ?>" required/></p>
                <p><label><font color="purple"> *Website: </font></label><input type="text" size="70" name="website" value="<?php echo $eventsRow['contact_website']; ?>" required/></p>
     <p><label><font color="purple"> Attachment: </font></label><input type="file" name="file" value="<?php echo $eventsRow['file']; ?>" >
<?php
if ($eventsRow['file'] != ""){
	 echo "Existing <a href= 'events/".$eventsRow['file']."'  download> file </a></p>";
	 }
    ?>
  
    <p><label><font color="purple"> Author: </font></label><?php echo $eventsRow['created_by']; ?>
	
	    <p><label><font color="purple"> Event Manager: </font>
	
	
	
	        <p>
		
<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("alumnidatabase");
$number = 0;
$result = mysql_query("SELECT eventmanagerID, name FROM eventmanager order by create_date desc");
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

echo "  <tr>
    <td><input type='checkbox' name='eventmanagerID[".$number."]' value='". $row['0'] ."' ";
	
	
$res=mysqli_query($conn, "SELECT count(1) as count FROM event_eventmanager WHERE  eventmanagerID =". $row['0'] ." and eventID = ".$getUID."");
$event=mysqli_fetch_array($res);
	if($event['count'] > 0){
		echo "checked";
	}
	
	
	echo "
	
	/></td>
  <td> ".$row['1']."  </td> 
    </tr>";

$number = $number + 1;
}

?>


		</p>
	
	
     <input type="hidden" size="70" name = "id" value = "<?php echo $eventsRow['eventsID']; ?>" ></p>
    <p>
    <input type="submit" value="Update"/></p>
    <p><a href="adminViewPerEvents.php?uid=<?php echo $_GET['uid'] ?>"><font face="verdana">Back </a> </p>
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
  <!--datepicker-->
  <link rel="stylesheet" href="css/bootstrap-datepicker.css"> 
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>
  
  <script>
  $.fn.datepicker.defaults.format = "yyyy/mm/dd";
  $.fn.datepicker.defaults.autoclose = true;
  $('#startDate').datepicker();
  $('#endDate').datepicker();
  </script>

  </body>
</html>

