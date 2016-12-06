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
		
		

 </script>
 
 <script type="text/javascript">
function checkstate(name){
  if(name=='Other Country')document.getElementById('div1').innerHTML=' <p> <label style="visibility: hidden">  Message:  </label> <input type="text" size="70" name="otherState" required/> </p>';
  else document.getElementById('div1').innerHTML='';
}
</script>  

<script type="text/javascript">
function checkindustry(name){
  if(name=='Others')document.getElementById('div2').innerHTML=' <p>  <label style="visibility: hidden">  Message:  </label><input type="text" size="70" name="otherIndustry" required/> </p>';
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
 width:580px;  
font-family: Arial; font-size: 15pt;  
}

   #wgtmsr option{
  width:580px;  
font-family: Arial; font-size: 15pt; 
}

input[type="file"] {
   
    vertical-align: middle;
	margin-left: 270px;
	}
	
	.formfield * {
  vertical-align: middle;
}




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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Post Job Advertisement</h2>
  <div align="left">
  
   <form action="process_jobAdmin.php" method="post" enctype="multipart/form-data" onSubmit="alert('Successful posted!');">


      
		<p> <label><font color="purple"><b>*Job Title: </b></font></label>
			<input type="text" size="70" name="title" required/>
	   </p>			
                      
		<p> <label><font color="purple"><b>*Industry: </b></font></label>
			<select name="industry" id="wgtmsr" onchange="checkindustry(this.options[selectedIndex].value)"> 
              
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
                <option value="Others">Others</option> </select></p>
                <div id="div2"></div></p>
               <p>
	   </p>
		
		<p> <label><font color="purple"><b>*Company:  </b></font> </label>
			<input type="text" size="70" name="company" required /></textarea> 
		</p>
		
		<p> <label><font color="purple"><b>*State/Other Country: </b></font> </label>
			   <select name="state" id="wgtmsr" onchange="checkstate(this.options[selectedIndex].value)"> 
              
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
               <option value="Other Country">Other Country</option></select></p>
             <div id="div1"></div></p>
		</p>
		
		<p class="formfield"> <label><font color="purple"><b>Company Address: </b></font> </label>
				<textarea rows="3" cols="70" name="address"/></textarea> 
		</p>
		
		<p class="formfield"> <label><font color="purple"><b>Requirements: </b></font> </label>
			<textarea rows="10" cols="70" name="requirement"/></textarea> 
		</p>
		
		<p> <label><font color="purple"><b>Salary: </b></font> </label>
			<input type="text" size="70" name="salary" /> 
		</p>
		
		<p class="formfield"> <label><font color="purple"><b>Jobscope: </b></font> </label>
			<textarea rows="10" cols="70" name="jobscope"/></textarea> 
		
		<p> <label><font color="purple"><b>*Contact Name: </b></font> </label>
			<input type="text" size="70" name="contact_name" required />  
		</p>
		
		<p> <label><font color="purple"><b>*Contact Email Address: </b></font> </label>
			<input type="email" size="70" name="contact_email" required />  
		</p>
		
		<p> <label><font color="purple"><b>Contact Phone number: </b></font> </label>
			<input type="text" size="70" name="contact_phone" />  
		</p>
		
			<p> <label><font color="purple"><b>Fax: </b></font> </label>
			<input type="text" size="70" name="fax" /> 
		</p>
		
		<p> <label><font color="purple"><b>Website: </b></font> </label>
			<input type="email" size="70" name="website" />  
		</p>
		
		
		<p> <label><font color="purple"><b>Attachment: </b></font> </label> 
		
		 <input type="file" name="attachment"  /> 
                           
			
        </p>
		
		 <p style="text-align: center;"><input class="btn btn-primary" type="submit" name="submit" value="Submit" >  <font face="verdana">
			
		 <!--<p style="text-align: center;"> <input class="btn btn-primary" name="action"  type="submit" value="Submit"  /> <font face='verdana'> 
							
	<input class="btn btn-primary"    name="action"   type="submit"  value = "Save" onclick= "return confirm('Are you sure want to save this? You still can edit after save then submit for admin approval.')" /> <font face="verdana"></br>
	-->
	<br/>
	<br/>
                    
               
             
                
                 </form>

<br>  <p style="text-align: center;"><a class="btn btn-primary" href="jobListAdmin.php"><font face="verdana"><b>Back</b></a>
 
 <br/>
  
</div>
</div>
        </div>
      </div>

    </div>
   

<?php

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
