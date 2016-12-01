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
  
  <script>
window.onload=function() {
	
 var list =	document.querySelectorAll("input[name^='qa[']")
	
	for (var n = 1; n <= list.length; n++) { 
	var name = "answer[" + n + "]";

  var promised = document.getElementsByName(name);
  for (var i=0;i<promised.length;i++) {
    promised[i].onclick=function() {
		
      var rads = this.form[this.name];

      for (var i=0;i<rads.length;i++) {
		   var textField = this.form[rads[i].value.toLowerCase()];

        if (textField) textField.disabled = !rads[i].checked;
      }    
    }    
  }
}
}       

</script>
<STYLE TYPE="text/css">

td{font-family: Arial; font-size: 10pt;}

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

if(!isset($_SESSION['userName']))
{
 header("Location: index.php");
}
$res=mysqli_query($conn, "SELECT * FROM user WHERE userID=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
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
<?php
$titleId = $_GET['titleId'];
if(isset($_GET['name'])) {
$name = $_GET['name'];
}
else{

$result=mysqli_query($conn, "SELECT titledescp FROM surverytitle where id = '". $titleId . "'");
$QuestionDetails1=mysqli_fetch_array($result);
$name = $QuestionDetails1['titledescp'];
}
?>
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 50px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;"><?php echo $name ?></h2>
  <br/>
  <div align="centre">
   <form action="processInsertAnswer.php" method="post" enctype="multipart/form-data">

<table style="font-family:Georgia, Garamond, Serif;color:black;font-style:italic;width:90%;" border = '1' align = 'center' style=""> 
<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("alumnidatabase");
$titleId = $_GET['titleId'];
$result = mysql_query("SELECT id,QUESTION,ANSWERA,ANSWERB,ANSWERC,ANSWERD,ANSWERE,ANSWERF,ANSWERG,ANSWERH,ID FROM SURVERYQA where title = '". $titleId . "'");
$number = 1;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

echo " 
			<tr><td>	
			<input type='hidden' name = 'qa[".$number."]' value = '". $row['0'] . "' >
			<label>".$number.". ".$row['1']." </label>
</td>
				</tr>
				<tr>
				<td>";
			
			if($row['2'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='A'  required/> <label>". $row['2'] . "</label> <br>";
			}
						if($row['3'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='B' /> <label>". $row['3'] . "</label> <br>";
			}
						if($row['4'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='C' /> <label>". $row['4'] . "</label> <br>";
			}
						if($row['5'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='D' /> <label>". $row['5'] . "</label> <br>";
			}
						if($row['6'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='E' /> <label>". $row['6'] . "</label> <br>";
			}
						if($row['7'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='F' /> <label>". $row['7'] . "</label> <br>";
			}
						if($row['8'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='G' /> <label>". $row['8'] . "</label> <br>";
			}
						if($row['9'] != ""){
			echo "
			<input name='answer[".$number."]' type='radio' value='H' /> <label>". $row['9'] . "</label> <br>";
			}
			
			
			echo "
			<input name='answer[".$number."]' type='radio' value='otherSpecify[".$number."]' />
			<label>Others <span></label><input name='otherspecify[".$number."]' type='text' value='' disabled='disabled' /> 
		<br>
			</td>
		</tr>";

$number = $number + 1;

}

echo "<input type='hidden' name = 'titleId' value = '".$titleId."' >";
?>


</table> <br>
   <p style="text-align: center;"><input type="submit" value="Submit" onclick="return confirm('Are you sure want to submit your survey answers?')"/> </p>
  </form>
  
<br/>
  <p style="text-align: center;"><a class="btn btn-primary" href="studentViewTitle.php"><font face="verdana"><b>Back</b></a> 
<br/>
<br/>
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

