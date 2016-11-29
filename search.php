<!DOCTYPE  HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd"> 

        <script type="text/javascript">
            function CheckSearch(val) {
                //hide all elements
                var name = document.getElementById("name");
                name.style.display = "none";
                name.value = "";
                
                var programme = document.getElementById("programme");
                programme.style.display = "none";
                programme.value = "";
                
                var major = document.getElementById("major");
                major.style.display = "none";
                major.value = "";
                
                //depends on index selected, show the desired one
                if (val.selectedIndex === 0){
                     document.getElementById("name").style.display = "block";
                }else if(val.selectedIndex === 1){
                     document.getElementById("programme").style.display = "block";
                }else{                    
                     document.getElementById("major").style.display = "block";
                }
              
            }
         
        </script> 
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}



li a:hover:not(.active) {
    background-color: black;
    color: white;
}

form p label {
	display:block;
	float:left;
	width:200px;
	padding: 0px 0px 0px 0px;
}


</style>
		
		
		
    </head> 
    <p><body> 
	
	<div id="menu">
<ul>
  <li><a href="Home.php"><font face="verdana">Home</a></li>
  <li><a href="ChangePassword.php"><font face="verdana">My Account</a></li>
   <li><a href="ViewProfile.php"><font face="verdana">My Profile</a></li>
   <li><a href="search.php"><font face="verdana">Alumni Directory</a></li>
  <li><a href="Home.php"><font face="verdana">Friend Network</a></li>
  <li><a href="Home.php"><font face="verdana">Events</a>
  <img src="calendar.png" alt="calendar" style="width:80px; height:80px;" /></li>
  <li><a href="Home.php"><font face="verdana">Survey</a></li>
   <li><a href="Home.php"><font face="verdana">Testimonials</a></li>
  <li><a href="joblistalumni.php"><font face="verdana">Job Sharing</a></li>
  <li><a href="Logout.php?logout=1"><font face="verdana">Log out</a></font></li>
  <!-My calendar widget - HTML code - mycalendar.org --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold;"><a style="font-size:12px;text-decoration:none;color:#000 ;" href="http://mycalendar.org/"> Calendar</a></div></noscript><script type="text/javascript" src="http://mycalendar.org/calendar.php?group=&widget_number=3&cp3_Hex=FFB200&cp2_Hex=040244&cp1_Hex=F9F9FF&fwdt=140&lab=1"></script></div><!-end of code-->
   
</ul>
</div>

<div style="margin-left:15%;padding:1px 16px;height:1000px;">
<div id="header">
  
  <img src="alumni.png" alt="fsktm" style="width:1110px; height:250px;" />
</div>
       <p> <h3> <label><font color="purple"><b>Search  Alumni </b></font></label> </h3> 
	   
        <p id="testestest">You  may search either by User name, Programme or Major</p> 
        <form  method="post" action="process_search.php"  > 
            <select id="search" onchange="CheckSearch(this)">
                <option value="Name">Name</option>
                <option value="Programme">Programme</option>
                <option value="Major">Major</option>
                <option value="" hidden selected>Please select what to search</option>
            </select>
            <br><br>
            <input  type="text" name="name" id="name" style="display: none"> 

            <select name="programme" id="programme" style="display: none">
                <option name="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="Doctorate">Doctorate</option>
                <option value="" hidden selected>Please select a programme</option>
            </select>

            <select name="major" id="major" style="display: none">
                <option value="Artifical Intelligence">Artifical Intelligence</option>
                <option value="Computer System and Network">Computer System and Network</option>
                <option value="Information System">Information System</option>
                <option value="Software Engineering">Software Engineering</option>
                <option value="Information Techonology">Information Techonology</option>
                <option value="" hidden selected>Please select a major</option>
            </select>

            <input  type="submit" name="submit" value="Search"> 
        </form> 
    </body> 
</html> 
</p> 