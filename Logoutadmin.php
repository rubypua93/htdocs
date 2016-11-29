<?php
session_start();

if(!isset($_SESSION['admin']))
{
 header("Location: homepage.php");
}
else if(isset($_SESSION['admin'])!="")
{
 header("Location: 	homepage.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['admin']);
 header("Location: homepage.php");
}

?>