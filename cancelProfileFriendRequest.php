<?php
session_start();
?>

<?php

include_once 'DBConnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: signIn.php");
}
$res1=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow1=mysqli_fetch_array($res1);


$getUID = $_GET['uid'];
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$getUID);
$userRow=mysqli_fetch_array($res);
?>

<!DOCTYPE html>

<script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                document.getElementById("picture").src = e.target.result;
                document.getElementById("picture").width = "200";
                document.getElementById("picture").width = "200";
            };

                reader.readAsDataURL(input.files[0]);
            }
        }
		
		function checkindustry(name){
  if(name=='Others')document.getElementById('div2').innerHTML=' <input type="text" name="industry" />';
  else document.getElementById('div2').innerHTML='';
}
	
 </script>
 
 <style type="text/css">
    label {
	   
width:25%;
display:inline-block;	
padding-left: 80px;
	}

#wgtmsr{
 width:200px;   
}

   #wgtmsr option{
  width:200px;   
}

    </style>


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

  </head>
  <body>
    <div id="fh5co-wrapper">
    <div id="fh5co-page">
    <div id="fh5co-header">
      <div class="top">
        <div class="container">

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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Profile</h2>
  <div align="left">
  
   
 <form action="process_cancelFriendRequest.php" method="post" enctype="multipart/form-data" onSubmit="alert('Friend Request has been canceled.');">					

  <br/>                    
 <?php
                   $image = "uploads/". $userRow['profilepicture'];
					$image2 = $userRow['profilepictureLink'];
					
					if ($userRow['profilepicture'] !=null){
						$image1 = $image;
					}
					
					else if ($userRow['profilepictureLink']!=null){
						$image1 = $image2;
					}
					
					else {
						$image1 = "uploads/noprofilepicture.png";
					}	
		?>
		
                
	<center>	<img id="picture" src=<?= $image1 ?> alt="your image" height=300 width=300 />	</p>	</center>
		
		
                      
 <p>  <label><font color="purple"><b>Name: </b></font></label>
	   <input type="text" size="70" name="fullname" value="<?php echo $userRow['fullName']; ?> " disabled ;/>
	   </p>
		<!--	<p> 	<label><font color="purple"><b>Email:  </b></font> </label> 
			<input type="text" size="70" name="fullname" value="<?php echo $userRow['email']; ?> " disabled ;/>
	</p>
	-->
		<p> 	<label><font color="purple"><b>Programme:  </b></font> </label>
			<input type="text" size="70" name="programme" value="<?php echo $userRow['programme']; ?>  " disabled ;/>
	</p>
		<p><label> <font color="purple"><b>Major:  </b></font> </label>
		<input type="text" size="70" name="major" value="<?php echo $userRow['major']; ?>  " disabled ;/>
		</p>
		<p><label><font color="purple"><b>Intake Year:  </b></font> </label>
		<input type="text" size="70" name="graduateYear" value="<?php echo $userRow['graduateYear']; ?> " disabled ;/>
		</p>
		<!--
		<p><label><font color="purple"><b>Phone Number:  </b></font> </label> <input type="text" size="70" name="phonenumber" value="<?php echo $userRow['phoneNum']; ?>" disabled /></p>
		<p> <label><font color="purple"><b>Address:  </b></font> </label> <textarea rows="3" cols="70" name="address" disabled /> <?php echo $userRow['address'];?> </textarea> </p>
		<p> <label><font color="purple"><b>Occupation:  </b></font> </label><input type="text" size="70" name="occupation" value="<?php echo $userRow['occupation']; ?>" disabled /></p>
		-->
             <INPUT TYPE="text" NAME="userID"  value="<?php echo $userRow['userID']; ?>" style="display: none">
			 
			 <?php
			 	//prepare sql query 
	
		$respondFriend = mysqli_query($conn, "SELECT * FROM friend WHERE toUserID = '". $userRow['userID'] ."' AND fromUserID= ".$_SESSION['user']);
		//$respondFriend1 = mysqli_query($conn, "SELECT * FROM friend WHERE fromUserID = '". $userRow['userID'] ."'AND toUserID= ".$_SESSION['user']);
		//fetch array out as 
		//$friendRow = mysqli_fetch_array($respondFriend);
		
		
		if (mysqli_num_rows($respondFriend ) > 0) {	
		echo " <p style='text-align: center;'><input class='btn btn-primary' type='submit' name='action' value='Cancel Friend Request' onclick= 'return confirm(\"Are you sure want to cancel this?\")'/> <font face='verdana'> ";
		}
		//else {
			//echo "<p style='text-align: center;'><input class='btn btn-primary' type='submit' name='action' value='Cancel' onclick= 'return confirm('Are you sure want to cancel this?')'/> <font face='verdana'> ";
		//}
		
			 ?>
             <!-- <p style="text-align: center;"><input class="btn btn-primary" type="submit"  value="Cancel Friend Request" name="action" class="Cancel Friend Request" onclick="return confirm('Are you sure want to cancel this?')" /> <font face="verdana">
             -->
				<p style="text-align: center;"><a class="btn btn-primary" href="cancelFriendRequest.php"><font face="verdana"><b>Back </b></a> </p>

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
