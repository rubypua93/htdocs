<?php
session_start();
?>
<!DOCTYPE html>

<script type="text/javascript">
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                document.getElementById("picture").src = e.target.result;
                document.getElementById("picture").width = "300";
                document.getElementById("picture").width = "300";
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

input[type="file"] {
   
    vertical-align: left;
	
	}
	
	.formfield * {
  vertical-align: middle;
}




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
 header("Location: signIn.php");
}
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

$getUID = $_GET['uid'];
$jobRes=mysqli_query($conn, "SELECT * FROM job WHERE jobID=".$getUID);
$jobRow=mysqli_fetch_array($jobRes);
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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Job</h2>
  <div align="left">
  
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype= "multipart/form-data" >


      <p> <label><font color="purple"><b>Job Title: </b></font></label>
			<input type="text" size="70" name="title" value = "<?php echo $jobRow['title'];?>" disabled ;/>
	   </p>	
							
                      
		<p> <label><font color="purple"><b>Industry: </b></font></label>
			<input type="text" size="70" name="industry" value = "<?php echo $jobRow['industry'];?>" disabled ;/>
	   </p>
		
		<p> <label><font color="purple"><b>Company:  </b></font> </label>
			<input type="text" size="70" name="company" value = "<?php echo $jobRow['company'];?>" disabled ; />  </textarea> 
		</p>
		
		<p> <label><font color="purple"><b>State/Other Country: </b></font> </label>
			<input type="text" size="70" name="state" value = "<?php echo $jobRow['state'];?>" disabled ; />  </textarea> 
		</p>
		
		<p class="formfield">
		<label><font color="purple"><b>Company Address: </b></font> </label>
				<textarea rows="3" cols="70" name="address" disabled ; /> <?php echo $jobRow['address'];?></textarea> 
		</p>
		
		<p class="formfield">
		<label><font color="purple"><b>Requirements: </b></font> </label>
			<textarea rows="10" cols="70" name="requirement" disabled ; /> <?php echo $jobRow['requirement'];?></textarea> 
		</p>
		
		<p> <label><font color="purple"><b>Salary: </b></font> </label>
			<input type="text" size="70" name="salary" value = "<?php echo $jobRow['salary'];?>" disabled ; /></textarea> 
		</p>
		
		<p class="formfield"> <label><font color="purple"><b>Jobscope: </b></font> </label>
			<textarea rows="10" cols="70" name="jobscope" disabled ; /> <?php echo $jobRow['jobscope'];?>  </textarea> 
		
		<p> <label><font color="purple"><b>Contact Name: </b></font> </label>
			<input type="text" size="70" name="contact_name" value = "<?php echo $jobRow['contact_name'];?>" disabled ; />  </textarea> 
		</p>
		
		<p> <label><font color="purple"><b>Contact Email Address: </b></font> </label>
			<input type="text" size="70" name="contact_email" value = "<?php echo $jobRow['contact_email'];?>" disabled ; />  </textarea> 
		</p>
		
		<p> <label><font color="purple"><b>Contact Phone number: </b></font> </label>
			<input type="text" size="70" name="contact_phone" value = "<?php echo $jobRow['contact_phone'];?>" disabled ; />  </textarea> 
		</p>
		
			<p> <label><font color="purple"><b>Fax: </b></font> </label>
			<input type="text" size="70" name="fax" value = "<?php echo $jobRow['fax'];?>" disabled ; />  </textarea> 
		</p>
		
		<p> <label><font color="purple"><b>Website: </b></font> </label>
			<input type="text" size="70" name="website" value = "<?php echo $jobRow['website'];?>" disabled ; />  </textarea> 
		</p>
		
		
		<p> <label><font color="purple"><b>Attachment: </b></font> </label> 
		
		<?php 
			if ($jobRow['file'] == ""){
				echo "No Attachment	";
				
			}  
			else{
				echo "<a href= 'job/".$jobRow['file']."'  download> Attachment </a>";
			}
		
		?>
			
        </p>
		
		
			
		 <!--<p style="text-align: center;"> <input class="btn btn-primary" name="action"  type="submit" value="Submit"  /> <font face='verdana'> 
							
	<input class="btn btn-primary"    name="action"   type="submit"  value = "Save" onclick= "return confirm('Are you sure want to save this? You still can edit after save then submit for admin approval.')" /> <font face="verdana"></br>
	-->
	<br/>
	<br/>
                    
               
             
                
                 </form>

<br> <p style="text-align: center;"><input class="btn btn-primary"value="Back" onclick="history.back(-1)" /><font face="verdana"></br>
 
 <br/>
  
</div>
</div>
        </div>
      </div>

    </div>
   

<?php
/*include_once 'DBConnect.php';


//if ($_POST["content"] != ""){
	if(isset($_POST['action'])) {
	
	if ($_POST['action'] == 'Submit')
	{ 
		$q = "insert into researchcollaboration(createUserID,admin_ind, title, description, contactEmail, contactNum, cooperation, author, date, status) 
			values('".$_SESSION['user']."','N', '".$_POST["title"]."', '".$_POST["description"]."', '".$_POST["contactEmail"]."', '".$_POST["contactNumber"]."', '".$_POST["cooperation"]."', '".$userRow['fullName']."',NOW(), '1')";
		mysqli_query($conn, $q) or die(mysql_error());
		
		 $res =  mysqli_insert_id ($conn);
		
		 
		//Attachment
		if(empty($_FILES["attachment"]["name"])){
		//if ($_POST["attachment"]= ""){
			$fnm = null;
			
		}
		else{
		
			$fnm = $res;
			move_uploaded_file($_FILES["attachment"]["tmp_name"], __DIR__."/researchAttachment/" . $fnm);
		}
	
		$pic = "UPDATE researchcollaboration SET attachment = '".$fnm."'
               WHERE researchID =" .$res;
		mysqli_query($conn, $pic) or die(mysql_error());
		
		echo "<script type='text/javascript'>alert('You have successfully submitted your title.')</script>";
		
	
	}
	//else if ($_POST['action'] == 'Save'){
		//$q = "insert into testimonial(createUserID,author, title, content, date, status) values('".$_SESSION['user']."','".$userRow['fullName']."','".$_POST["title"]."','".$_POST["content"]."',NOW(), '2')";
		//mysqli_query($conn, $q) or die(mysql_error());
	//}
	}
//}

//else {
	//$message = "Please fill up the content";
	//echo "<script type='text/javascript'>alert('$message');</script>";
//}
*/

?>
   

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
