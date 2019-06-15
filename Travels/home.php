<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysqli_query($con, "SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_assoc($res);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
h3,h2	{
  text-shadow: 2px 2px 5px red;
}
<link rel="stylesheet" href="style.css" type="text/css" />
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Destiny</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body background='img/slide-one.jpg'>
<div id="header">
	<div id="left">
    <label><h3>Welcome to Destiny</h3></label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
<br/>
<br/>
<marquee bgcolor="White"><h2><font color="green">We'll drive you happy!</font></h2></marquee>
<br/><br/><br/><br/><br/><br/>
<div align="center">
<table align="center" width="30%" border="0" >
<tr><td>
<button type="button" name="Search_Bus"><a href="http://localhost/Travels/search_bus.php">Search Bus</a></button></td></tr>
<tr><td><button type="button" name="Book_Bus"><a href="http://localhost/Travels/AddPassenger.php">Book Bus Here...</a></button></td></tr>
<tr><td><button type="button" name="ticket"><a href="http://localhost/Travels/getTicket.php">Get Your Ticket Here...</a></button></td></tr>
<tr><td><button type="button" name="Cancel_ticket"><a href="http://localhost/Travels/cancelTicket.php">Cancel Yout Ticket</a></button></td></tr>
</body>
</html>