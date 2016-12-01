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
  <script src="Chart.js"></script>
  
  
  
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
  

<div style = "background: rgba(255, 255, 255, 0.9);">
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;"><?php echo $QuestionDetails1['titledescp']; ?></h2>
  <div align="center">
  <table style = 'width:90%' border = '1'> 
<?php

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("alumnidatabase");
$titleId = $_GET['titleId'];
$result = mysql_query("SELECT QUESTION,ANSWERA,ANSWERB,ANSWERC,ANSWERD,ANSWERE,ANSWERF,ANSWERG,ANSWERH,ID FROM SURVERYQA where title = '". $titleId . "'");
$number = 1;
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
$AnswerLabelA = $row['1'];
$AnswerLabelB = $row['2'];
$AnswerLabelC = $row['3'];
$AnswerLabelD = $row['4'];
$AnswerLabelE = $row['5'];
$AnswerLabelF = $row['6'];
$AnswerLabelG = $row['7'];
$AnswerLabelH = $row['8'];
echo " 
			<tr><td colspan='2'>Q".$number.". ".$row['0']."</a></td> </tr>
			<tr>
			<td>";
			IF($row['1'] != ''){
			echo " A. ".$row['1']." ";
			}
			IF($row['2'] != ''){
			echo " <br>B.  ".$row['2']." ";
			}
			IF($row['3'] != ''){
			echo "<br>C.  ".$row['3']."  ";
			}
			IF($row['4'] != ''){
			echo "<br>D.  ".$row['4']."  ";
			}
			IF($row['5'] != ''){
			echo "<br>E.  ".$row['5']."  ";
			}
			IF($row['6'] != ''){
			echo "<br>F.  ".$row['6']."  ";
			}
			IF($row['7'] != ''){
			echo "<br>G.  ".$row['7']."  ";
			}
			IF($row['8'] != ''){
			echo "<br>H.  ".$row['8']."  ";
			}
			echo "
			<br>
			<br>
			<br>
			</td> 
			<td>
			<canvas id='myChart".$number."' width='500px' height='10px'></canvas>
			</td>
			</tr>";






$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid = '".$row['9']."' and answer = 'A'");
$adminRow=mysqli_fetch_array($res);
$ATotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'B'");
$adminRow=mysqli_fetch_array($res);
$BTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'C'");
$adminRow=mysqli_fetch_array($res);
$CTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'D'");
$adminRow=mysqli_fetch_array($res);
$DTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'E'");
$adminRow=mysqli_fetch_array($res);
$ETotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'F'");
$adminRow=mysqli_fetch_array($res);
$FTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'G'");
$adminRow=mysqli_fetch_array($res);
$GTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'H'");
$adminRow=mysqli_fetch_array($res);
$HTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT COUNT(1) as total FROM studentAnswer WHERE quesstionid='".$row['9']."' and answer = 'Other'");
$adminRow=mysqli_fetch_array($res);
$OtherTotal = $adminRow['total'];

$res=mysqli_query($conn, "SELECT QUESTION,ANSWERA,ANSWERB,ANSWERC,ANSWERD,ANSWERE,ANSWERF,ANSWERG,ANSWERH,ID FROM SURVERYQA WHERE ID = '".$row['9']."'");
$QuestionDetails=mysqli_fetch_array($res);
$AnswerLabelA = $QuestionDetails['1'];
$AnswerLabelB = $QuestionDetails['2'];
$AnswerLabelC = $QuestionDetails['3'];
$AnswerLabelD = $QuestionDetails['4'];
$AnswerLabelE = $QuestionDetails['5'];
$AnswerLabelF = $QuestionDetails['6'];
$AnswerLabelG = $QuestionDetails['7'];
$AnswerLabelH = $QuestionDetails['8'];
$AnswerLabelOther = 'Others';


 echo '

<script src="Chart.js"></script>

<script>

var Aanswer = '.$ATotal.';
var Banswer = '.$BTotal.';
var Canswer = '.$CTotal.';
var Danswer = '.$DTotal.';
var Eanswer = '.$ETotal.';
var Fanswer = '.$FTotal.';
var Ganswer = '.$GTotal.';
var Hanswer = '.$HTotal.';
var Otheranswer = '.$OtherTotal.';


var labelAanswer = '.json_encode($AnswerLabelA).';
var labelBanswer = '.json_encode($AnswerLabelB).';
var labelCanswer = '.json_encode($AnswerLabelC).';
var labelDanswer = '.json_encode($AnswerLabelD).';
var labelEanswer = '.json_encode($AnswerLabelE).';
var labelFanswer = '.json_encode($AnswerLabelF).';
var labelGanswer = '.json_encode($AnswerLabelG).';
var labelHanswer = '.json_encode($AnswerLabelH).';
var labelOtheranswer = '.json_encode($AnswerLabelOther).';

var labelArray = new Array();
var colourArray = new Array();
var borderColor = new Array();
var answerArray = new Array();
if(labelAanswer != 0){
	labelArray.push("Answer A");
	colourArray.push("rgba(255, 99, 132, 0.2)");
	borderColor.push("rgba(255,99,132,1)");
	answerArray.push(Aanswer);
}
if(labelBanswer != 0){
	labelArray.push("Answer B");
	colourArray.push("rgba(54, 162, 235, 0.2)");
	borderColor.push("rgba(54, 162, 235, 1)");
	answerArray.push(Banswer);
}
if(labelCanswer != 0){
	labelArray.push("Answer C");
	colourArray.push("rgba(255, 206, 86, 0.2)");
	borderColor.push("rgba(255, 206, 86, 1)");
	answerArray.push(Canswer);
}
if(labelDanswer != 0){
	labelArray.push("Answer D");
	colourArray.push("rgba(75, 192, 192, 0.2)");
	borderColor.push("rgba(75, 192, 192, 1)");
	answerArray.push(Danswer);
}
if(labelEanswer != 0){
	labelArray.push("Answer E");
	colourArray.push("rgba(153, 102, 255, 0.2)");
	borderColor.push("rgba(153, 102, 255, 1)");
	answerArray.push(Eanswer);
}
if(labelFanswer != 0){
	labelArray.push("Answer F");
	colourArray.push("rgba(255, 159, 64, 0.2)");
	borderColor.push("rgba(255, 159, 64, 1)");
	answerArray.push(Fanswer);
}
if(labelGanswer != 0){
	labelArray.push("Answer G");
	colourArray.push("rgba(75, 192, 192, 0.2)");
	borderColor.push("rgba(75, 192, 192, 1)");
	answerArray.push(Ganswer);
}
if(labelHanswer != 0){
	labelArray.push("Answer H");
	colourArray.push("rgba(153, 102, 255, 0.2)");
	borderColor.push("rgba(153, 102, 255, 1)");
	answerArray.push(Hanswer);
}

if(labelOtheranswer != 0){
	labelArray.push("Others");
	colourArray.push("rgba(255, 159, 64, 0.2)");
	borderColor.push("rgba(255, 159, 64, 1)");
	answerArray.push(Otheranswer);
}



var ctx = document.getElementById("myChart'.$number.'");
var myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: labelArray,
        datasets: [{
            label: "Student Answer",
            data: answerArray,
            backgroundColor: colourArray,
            borderColor: borderColor,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
}

);
</script>';

			

			
$number = $number + 1;

}

?>
 </table> 
 <?php
 

 ?>
  
  
<br>

    <p style="text-align: center;"><a class="btn btn-primary" href=" report.php"><font face="verdana"><b>Back to List of Report</b></a> </p>
	<!--<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}

</script>-->
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

