<?php
session_start();

if(!isset($_SESSION['eventmanager']))
{
 header("Location: eventmanager.php");
}
else if(isset($_SESSION['eventmanager'])!="")
{
 header("Location: 	eventmanager.php");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['eventmanager']);
 header("Location: homepage.php");
}

?>