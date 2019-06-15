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
        	Welcome <?php echo "Admin"; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
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
<button type="button" name="Add Bus"><a href="http://localhost/Travels/AddBus.php">Add Bus</a></button></td></tr>
<tr><td><button type="button" name="Add Route"><a href="http://localhost/Travels/AddRoute.php">Add New Route</a></button></td></tr>
<tr><td><button type="button" name="Add Bus"><a href="http://localhost/Travels/deleteBus.php">Delete Bus</a></button></td></tr>
<tr><td><button type="button" name="Add Route"><a href="http://localhost/Travels/deleteRoute.php">Delete Route</a></button></td></tr>
</body>
</html>