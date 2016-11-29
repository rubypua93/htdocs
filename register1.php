<!DOCTYPE html>
<html>
<body>

<img src="alumni.png" alt="alumni" style="width:1330px;height:330px;">

<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #ce33ff;
	height: 100%;
    overflow: auto;
}

li {
    float: right;
}

li a, .dropbtn{
    display: block;
    color: #000;
	 text-align: center;
    padding: 8px 20px;
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
	width:200px;
	padding: 0px 0px 0px 500px;
}

img
{
    max-width: 100%;
  
}
</style>
</head>
<body>


<ul>
<font face="verdana">
<li class="dropdown">
    <a href="homepage.php" class="dropbtn">Login</a>
    <div class="dropdown-content">
	<span style="color:blue;font-weight:bold">Status</span>	
      <a href="loginadmin.php">Admin</a>
      <a href="index.php">Alumni</a>
    </div>
  
  <li style="float:right"><a href="register1.php">Sign Up</a></li>
  <li style="float:right"><a href="homepage.php">Home</a></font></li>
  </li>
</ul>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register an alumni account</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
 
 <p><center> <h2>Register an account to join us now! :)</h2></center></p>
  <font face="verdana">



 <form action="process_register.php" method="post" enctype="multipart/form-data">

                           <p>
						   <label><font color="purple"><b>User Name: </b></font> </label>             
                            <input type="text" name="username" required/>
                            </p>
                            <p>
                            <label><font color="purple"><b>Email: </b></font> </label> 
                            <input type="email" name="email" required/>
                            
                            <p>
                            <label><font color="purple"><b>Password: </b></font> </label> 
                            <input type="password" name="password" required/>
                            </p>
                            <p>
                            <label><font color="purple"><b>Confirm Password: </b></font> </label> 
                            <input type="password" name="checkpassword" required/>
                            </p>
							
							<p>
							<label><font color="purple"><b>Full Name: </b></font> </label> 
                            <input type="text" name="fullname" required/>
                           </p>
							<p>
							<label><font color="purple"><b>Programme: </b></font> </label> 
							<select name="programme">
							<option value="Bachelor">Bachelor</option>
							<option value="Master">Master</option>
							<option value="Doctorate">Doctorate</option>
							</select>
							 </p>
							 <p>
							<label><font color="purple"><b>Major: </b></font> </label> 
							<select name="major">
							<option value="Artifical Intelligence">Artificial Intelligence</option>
							<option value="Computer System and Network">Computer System and Network</option>
							<option value="Information System">Information System</option>
							<option value="Software Engineering">Software Engineering</option>
							</select>
							</p>
							 <p>
							<label><font color="purple"><b>Graduate year: </b></font> </label> 
							<select name="graduateyear">
							
							 <option value="2016">2016</option>
							 <option value="2015">2015</option>
							 <option value="2014">2014</option>
							 <option value="2013">2013</option>
							 <option value="2012">2012</option>
							 <option value="2011">2011</option>
							 <option value="2010">2010</option>
							 <option value="2009">2009</option>
							 <option value="2008">2008</option>
							 <option value="2007">2007</option>
							 <option value="2006">2006</option>
							 <option value="2005">2005</option>
							 <option value="2004">2004</option>
							 <option value="2006">2006</option>
							 <option value="2003">2003</option>
							 <option value="2002">2002</option>
							 <option value="2001">2001</option>
							 <option value="2000">2000</option>
							 <option value="1999">1999</option>
							 <option value="1998">1998</option>
							 <option value="1997">1997</option>
							 <option value="1996">1996</option>
							 <option value="1995">1995</option>
							 <option value="1994">1994</option>
							 <option value="1993">1993</option>
							 <option value="1992">1992</option>
							 <option value="1991">1991</option>
							 <option value="1990">1990</option>
							 <option value="1989">1989</option>
							 <option value="1988">1988</option>
							 <option value="1987">1987</option>
							 <option value="1986">1986</option>
							 <option value="1985">1985</option>
							 </select>
							 </p>
							 
							<p>
							<label><font color="purple"><b>Phone number: </b></font> </label> 
                            <input type="text" name="phonenumber" />
                            <br><br>
							<p>
							<label><font color="purple"><b>Address: </b></font> </label> 
                            <textarea name="address"></textarea>
                           </p>
							<p>
                            <label><font color="purple"><b>Profile Photo: </b></font> </label> 
                            <input type="file" name="profilephoto" />
                           </p>
                            
                           <p>
                            <br>
                           <center> <input type="submit" /> </center></br>
							
                        </form>    
						</body>
						</html>