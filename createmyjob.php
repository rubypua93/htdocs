<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
}
li {
    text-align: center;
    border-bottom: 1px solid #555;
}

li:last-child {
    border-bottom: 1px solid #555;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: #ce33ff;
    position: fixed;
    height: 100%;
    overflow: auto;
}

li a,.dropbtn {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}


li a:hover:not(.active),dropdown:hover .dropbtn {
    background-color: black;
    color: white;
}




li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}


form p label {
	display:block;
	float:left;
	width:250px;
	padding: 0px 0px 0px 0px;
}

#div2{
    
    padding-left: 250px;
}
#div1{
    
    padding-left: 250px;
}

img
{
    max-width: 100%;
    height: auto;
}



</style>
</head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post a new job</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<div id="menu">
<ul>
 
 <?php 
 session_start();

  	if(isset($_SESSION['admin']))
{
  echo "
   <li><a href='admin.php'><font face='verdana'>Home</a></li>
  <li class='dropdown'>
    <a class='dropbtn'><font face='verdana'>News and Annoucements</a>
    <div class='dropdown-content'>
      <a href='photoadmin.php'>Upload Photo</a>
      <a href='news.php'>Update News and Annoucement</a>
    </div>
  
   <li><a href='admin.php'><font face='verdana'>Alumni Directory</a></li>
   <li><a href='events.php'><font face='verdana'>Events
  <img src='calendar.png' alt='calendar' style='width:60px; height:60px;' /></li></a>
	<li><a href='admin.php'><font face='verdana'>Manage Survey</a></li>
	<li><a href='admin.php'><font face='verdana'>Analysis Report</a></li>
    <li><a href='admin.php'><font face='verdana'>Manage Testimonial</a></li>
	<li><a href='admin.php'><font face='verdana'>FYP Research</a></li>
	";
}

else{
	echo "
	 <li><a href='alumni.php'><font face='verdana'>Home</a></li>
	   <li><a href='ChangePassword.php'><font face='verdana'>My Account</a></li>
	   <li><a href='ViewProfile.php'><font face='verdana'>My Profile</a></li>
   <li><a href='alumni.php'><font face='verdana'>Alumni Directory</a></li>
   <li><a href='alumni.php'><font face='verdana'>Friend Network</a></li>
   <li><a href='alumni.php'><font face='verdana'>Events
   <img src='calendar.png' alt='calendar' style='width:40px; height:40px;' /></li></a>
   <li><a href='alumni.php'><font face='verdana'>Survey</a></li>
   <li><a href='alumni.php'><font face='verdana'>Testimonials</a></li>
   <li><a href='alumni.php'><font face='verdana'>FYP Research</a></li>";
}

?>
	 
  <li class="dropdown">
    <a class="dropbtn"><font face="verdana">Job Advertisement Area</a>
    <div class="dropdown-content">
	<a href="joblist.php">View All Jobs </a>
	 <a href="myjob.php">View My Job List</a>
      <a href="createjob.php">Post Job Advertisement</a>
     
    </div>
   <li><a href="homepage.php"><font face="verdana">Log out</a></font></li>
  <!-My calendar widget - HTML code - mycalendar.org --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:120px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a></div></noscript><script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1"></script></div><!-end of code-->
   
</ul>
</div>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
<div id="header">
  
  



  <img src="alumni.png" alt="fsktm" style="width:1110px; height:250px;" />
</div>
  
  <h3>Post a new job Advertisement</h3>
  
  

  
  
   <form action="process_myjob.php" method="post" enctype="multipart/form-data" onSubmit="alert('Successful posted!');">

<script type="text/javascript">
function checkstate(name){
  if(name=='Other Country')document.getElementById('div1').innerHTML='<input type="text" name="state" />';
  else document.getElementById('div1').innerHTML='';
}
</script>  

<script type="text/javascript">
function checkindustry(name){
  if(name=='Others')document.getElementById('div2').innerHTML=' <input type="text" name="industry" />';
  else document.getElementById('div2').innerHTML='';
}
</script>  



			 <p>
						   <label><font color="purple"><b>Job Title:   </b></font></label>             
                            <input type="text" name="title" required/>
                            </p>
                           <p><label><font color="purple"><b>Industry: </b></font> </label> 
							<select name="industry" id="industry" onchange="checkindustry(this.options[selectedIndex].value)"> 
							
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
                            <label><font color="purple"><b>Company name: </b></font></label> 
                           <input type="text" name="company" required/>
                           </p>
						   
						   <p><label><font color="purple"><b>State/Other Country: </b></font> </label> 
							<select name="state" id="state" onchange="checkstate(this.options[selectedIndex].value)"> 
							
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
							
							 
						   
						   
						   <p>
                            <label><font color="purple"><b>Company address: </b></font></label> 
                            <textarea name="address" required/></textarea>
                           </p>
						   
						    <p>
						   <label><font color="purple"><b>Requirement:  </b></font> </label>             
					  <textarea name="requirement" required/></textarea>
                            </p>
                           
							 <p>
							<label><font color="purple"><b>Salary: </b></font></label> 
							 <input type="text" name="salary" required/>
							</p>
							
							<p>
                            <label><font color="purple"><b>Jobscope: </b></font></label> 
                             <textarea name="jobscope" required/></textarea>
                           </p>
						   
						    <p>
						   <label><font color="purple"><b>Contact Name:  </b></font> </label>             
                            <input type="text" name="name" required/>
                            </p>
                           
							 <p>
							<label><font color="purple"><b>Contact Email: </b></font></label> 
							  <input type="text" name="email" required/>
							</p>
							
							<p>
                            <label><font color="purple"><b>Contact Phone Number: </b></font></label> 
                            <input type="text" name="phone" value="-" required/>
                           </p>
						   
						    <p>
						   <label><font color="purple"><b>Fax:  </b></font> </label>             
                            <input type="text" name="fax" value="-" required/> 
                            </p>
                           
							 <p>
							<label><font color="purple"><b>Website: </b></font></label> 
							  <input type="text" name="website" value="-" required/>
							</p>
							
							<p>
                            <label><font color="purple"><b>Upload file: </b></font></label> 
                            <input type="file" name="file" />
                           </p>
						   
					
                            
                           <p> <input type="submit" value="Submit" /></p>
						   <p><a href="joblist.php"><font face="verdana">Back to job list </a> </p>
							
							</center>
                        </form>    

</div>

</body>
</html>