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

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
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

         <span> Welcome back,   <?php echo $userRow['userName']; ?></span>
          <span> <a href="Logout.php?logout=1">Log Out</a></span>
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container"> 	
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
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
<?php
$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT * FROM events WHERE eventsID=".$getUID);
$eventsRow=mysqli_fetch_array($res);
?>
  <h3 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;"><?php echo $eventsRow['title']; ?></h3>
  <div align="center">
  
    <form>                    
 <p>  <label><font color="purple"><b>Organizer: </b></font></label>
	   <input type="text" size="70" name="organizer" value="<?php echo $eventsRow['organizer']; ?> " disabled ;/>
	   </p>
	   
	    <p>  <label><font color="purple"><b>Speaker: </b></font></label>
	   <input type="text" size="70" name="speaker" value="<?php echo $eventsRow['speaker']; ?> " disabled ;/>
	   </p>

   <p>  <label><font color="purple"><b>Start Date: </b></font></label>
	   <input type="text" size="70" name="start_date" value="<?php echo $eventsRow['start_date']; ?> " disabled ;/>
	   </p>

         <p>  <label><font color="purple"><b>End Date: </b></font></label>
	   <input type="text" size="70" name="end_date" value="<?php echo $eventsRow['end_date']; ?> " disabled ;/>
	   </p> 
	   
	       <p>  <label><font color="purple"><b>Start Time: </b></font></label>
	   <input type="text" size="70" name="time" value="<?php echo $eventsRow['start_time']; ?> " disabled ;/>
	   </p> 
	   
	   
	       <p>  <label><font color="purple"><b>End Time: </b></font></label>
	   <input type="text" size="70" name="time" value="<?php echo $eventsRow['end_time']; ?> " disabled ;/>
	   </p> 
	   
	   
	       <p>  <label><font color="purple"><b>Location: </b></font></label>
	   <input type="text" size="70" name="location" value="<?php echo $eventsRow['location']; ?> " disabled ;/>
	   </p> 
	      
	   <p> <label><font color="purple"><b>Further info:  </b></font> </label> <textarea rows="3" cols="70" name="further_info" disabled /> <?php echo $eventsRow['further_info'];?> </textarea> </p>
	   
	       <p>  <label><font color="purple"><b>Contact Name: </b></font></label>
	   <input type="text" size="70" name="contact_name" value="<?php echo $eventsRow['contact_name']; ?> " disabled ;/>
	   </p> 
	   
	       <p>  <label><font color="purple"><b>Contact Phone number: </b></font></label>
	   <input type="text" size="70" name="contact_phone" value="<?php echo $eventsRow['contact_phone']; ?> " disabled ;/>
	   </p> 
	   
	       <p>  <label><font color="purple"><b>Contact Email address: </b></font></label>
	   <input type="text" size="70" name="contact_email" value="<?php echo $eventsRow['contact_email']; ?> " disabled ;/>
	   </p> 
	   
	       <p>  <label><font color="purple"><b>Website: </b></font></label>
	   <input type="text" size="70" name="contact_website" value="<?php echo $eventsRow['contact_website']; ?> " disabled ;/>
	   </p> 
		
		<p> <label><font color="purple"><b>Attachment: </b></font> </label> 
		
		<?php 
			if ($eventsRow['file'] == ""){
				echo "No attachment	";
				
			}  
			else{
				echo "<a href= 'events/".$eventsRow['file']."'  download> file </a>";
			}
		
		?>
	
			
        </p>
			

 <?php
	echo "<p> <label><font color='purple'> <b>Creator: </b></font></label> <input type='text' size='70' name='created_by' value='Admin' disabled /></p> ";
?>
        
          <p>  <label><font color="purple"><b>Create Date: </b></font></label>
	   <input type="text" size="70" name="create_date" value="<?php echo $eventsRow['create_date']; ?> " disabled ;/>
	   </p> 
	   
	   
						
    
                 </form>

	<br>
<br>

<?php
$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT count(1) count FROM attendees WHERE eventsID=".$getUID." and userID=".$_SESSION['user']);
$attendeesRow=mysqli_fetch_array($res);


  	if($attendeesRow['count'] == 0)
{
  echo "
<p style='text-align: center;'><a class='btn btn-primary' href='processAttendEvents.php?uid=".$_GET['uid']."' onclick=\"javascript:window.open('processGoogleCalendar.php?uid=".$_GET['uid']."', '_blank','toolbar=no,width=250,height=250');\"<font face='verdana'>Attend Event </a> </p>
 
	";
}
  	else
{
  echo "
<p style='text-align: center;'><a class='btn btn-primary' href='processCancelAttendEvents.php?uid=".$_GET['uid']."' onclick=\"javascript:window.open('processCancelGoogleCalendar.php?uid=".$_GET['uid']."', '_blank','toolbar=no,width=250,height=250');\"><font face='verdana'>Cancel Attendance </a> </p>
 
	";
}


?>
 <p><a href="alumniViewEvent.php"><font face="verdana">Back </a> </p>


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

