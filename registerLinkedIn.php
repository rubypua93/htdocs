<!DOCTYPE html>

<?php
$username = $_GET['username'];

?>

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


var textbox3 = document.getElementById('username');
username.value= VAR.firstname;
	
 </script>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
 
   
<style type="text/css">
   label {
	   
width:25%;
display:inline-block;	
padding-left: 80px;
}

#wgtmsr{
 width:580px;   
}

   #wgtmsr option{
  width:580px;   
}

input[type="file"] {
   
    vertical-align: middle;
	margin-left: 270px;
	}
	
	.formfield * {
  vertical-align: middle;
}

    </style>
  
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
          <span> Welcome to FSKTM Alumni Website</span>
 
        </div>
      </div>
      <!-- end:top -->
      <header id="fh5co-header-section">
        <div class="container">
          <div class="nav-header">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
       <h1 id="fh5co-logo" ><a href="homepage.php">
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
              <li>
                <a href="loginadmin.php">Login</a>
              </li>
              <li class="active"><a href="beforeRegister.php">Sign Up</a></li>
              <li  ><a href="homepage.php">Home</a></li>
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
  <h2 style = "color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 48px; margin: 0;text-align: center;">Registration</h2>
  <div align="left">
   <form action="process_register.php" method="post" enctype="multipart/form-data">
   
 <p>
						   <label><font color="purple"><b>*User Name: </b></font> </label>             
                            <input type="text" name="username" id="username"  value = "<?php echo $_GET['username'];?>" size="70" required/>
                            </p>
                            <p>
                            <label><font color="purple"><b>*Email: </b></font> </label> 
                            <input type="email" name="email" size="70"  required/>
                            
                            <p>
                            <label><font color="purple"><b>*Password: </b></font> </label> 
                            <input type="password" name="password" size="70"  required/>
                            </p>
                            <p>
                            <label><font color="purple"><b>*Confirm Password: </b></font> </label> 
                            <input type="password" name="checkpassword" size="70"  required/>
                            </p>
							
							<p>
							<label><font color="purple"><b>*Full Name: </b></font> </label> 
                            <input type="text" name="fullname" size="70" value = "<?php echo $_GET['fullname'];?>"  required/>
                           </p>
						   
						   
							<p>
							<label><font color="purple"><b>*Programme: </b></font> </label> 
							<select name="programme"  id="wgtmsr" >
							<option value="Bachelor">Bachelor</option>
							<option value="Master">Master</option>
							<option value="Doctorate">Doctorate</option>
							</select>
							 </p>
							 
							 <p>
							<label><font color="purple"><b>*Major: </b></font> </label> 
							<select name="major"  id="wgtmsr">
							<option value="Artifical Intelligence">Artificial Intelligence</option>
							<option value="Computer System and Network">Computer System and Network</option>
							<option value="Information System">Information System</option>
							<option value="Software Engineering">Software Engineering</option>
							<option value="Information Techonology">Information Techonology</option>
							</select>
							</p>
							 <p>
							<label><font color="purple"><b>*Intake year: </b></font> </label> 
							<select name="graduateyear"  id="wgtmsr">
							<option value="2013/2014">2013/2014</option>
							 <option value="2012/2013">2012/2013</option>
							 <option value="2011/2012">2011/2012</option>
							 <option value="2010/2011">2010/2011</option>
							 <option value="2009/2010">2009/2010</option>
							 <option value="2008/2009">2008/2009</option>
							 <option value="2007/2008">2007/2008</option>
							 <option value="2006/2007">2006/2007</option>
							 <option value="2005/2006">2005/2006</option>
							 <option value="2004/2005">2004/2005</option>
							 <option value="2003/2004">2003/2004</option>
							 <option value="2002/2003">2002/2003</option>
							 <option value="2001/2002">2001/2002</option>
							 <option value="2000/2001">2000/2001</option>
							 <option value="1999/2000">1999/2000</option>
							 <option value="1998/1999">1998/1999</option>
							 <option value="1997/1998">1997/1998</option>
							 <option value="1996/1997">1996/1997</option>
							 <option value="1995/1996">1995/1996</option>
							 <option value="1994/1995">1994/1995</option>
							 <option value="1993/1994">1993/1994</option>
							 <option value="1992/1993">1992/1993</option>
							 <option value="1991/1992">1991/1992</option>
							 <option value="1990/1991">1990/1991</option>
							 <option value="1989/1990">1989/1990</option>
							 <option value="1988/1989">1988/1989</option>
							 <option value="1987/1988">1987/1988</option>
							 <option value="1986/1987">1986/1987</option>
							 <option value="1985/1986">1985/1986</option>
							 </select>
							 </p>
							 
							 <p>
							<label><font color="purple"><b>Matric Number: </b></font> </label> 
                            <input type="text" name="matricnumber" size="70"  required/>
                           </p>
							 
							 <p>
                            <label><font color="purple"><b>*Evidence: </b></font> </label> 
							<input type="file" name="evidence"  required> 
							 
                           </p>
						   
							<p>
							<label><font color="purple"><b>Phone number: </b></font> </label> 
                            <input type="text" name="phonenumber" size="70" required/>
                           
							</p>
							<p class="formfield">
							<label><font color="purple"><b>Address: </b></font> </label> 
                            <textarea name="address" rows="3" cols="70" ></textarea>
                           </p>
						   
						   <p>
							<label><font color="purple"><b>*Occupation: </b></font> </label> 
                            <input type="text" name="occupation" size="70" value = "<?php echo $_GET['position'];?>" required/>
                           </p>
						
						   
							<p>
                            <label><font color="purple"><b>Profile Photo: </b></font> </label>
							
							<img id="picture" src="<?php if($_GET['pictureURL'] == "undefined"){echo "uploads/noprofilepicture.png";}
													else{echo $_GET['pictureURL'];}?>" alt="your image" height="200" width="200"/>
							  </p>
							  <p>
							
							<INPUT TYPE="text" NAME="pictureURL"  value="<?php echo $_GET['pictureURL']; ?>" style="display: none">
							
							<input type='file' name="profilephoto" onchange="readURL(this);" /> 
						

                           </p>
                            
                           <p>
                            <br>
						   <p style="text-align: center;"><input class="btn btn-primary" name="action" type="submit" value="Submit"/> <font face="verdana"></br>
							<br/>
							<br/>
                        </form>    
               
             
                
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

