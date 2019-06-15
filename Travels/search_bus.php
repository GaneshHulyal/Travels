<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Destiny Travels</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
h3	{
  text-shadow: 2px 2px 5px white;
}
</style>
</head>
<body background='img/slide-one.jpg'>
<div align='center'>
<br/>
<font color='white'><h1>Welcome to Destiny Travels</h1></font>
<br/>
<h1><font color='grey'>Search your bus...</h1></font>
</div>
<center>
<div id="login-form">
<form method="post">
    <table align="center" width="30%" border="0" >
<tr>
    <?php echo @$err;?> 
<td><input type="text" name="src" placeholder="From" required /></td>
</tr>
<tr>
<td><input type="text" name="dest" placeholder="To" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Search Bus</button></td>
</tr>
<tr>
<td><button type="reset" name="Reset">Reset</button></td>
</tr>
</table>
</form>
</div>
</center>
<BR/>
</body>
</html>
<html>
<head><title>Search Bus</title>
<style>
h3 {
  text-shadow: 2px 2px 5px blue;
}
</style>
</head>
<body>
<div align='center'>
</div>
<?php
session_start();
include_once 'connect.php';
if(isset($_POST['btn-login']))
{
	$src = mysqli_real_escape_string($con, $_POST['src']);
	$dest = mysqli_real_escape_string($con, $_POST['dest']);
	$res=mysqli_query($con, "SELECT * FROM bus_info WHERE source='$src' and destination='$dest'");
	$row=mysqli_fetch_array($res);?>
	<html><body>
	<div align="center">
	<table align="center" width="30%" border="0" bgcolor="khaki" >
	<tr><td>
	<div align="center"><h3><font color="White"><?php echo "Total Seat: "; echo $row['total_seat'],"\n";?></h3><BR/>
	<h3><font color="White"><?php echo "From: "; echo $row['source'];?></h3><br/>
	<h3><font color="White"><?php echo "To : "; echo $row['destination'];?></h3><br/>
	<h3><font color="White"><?php echo "Deprature Time : "; echo $row['departure_time'];?></h3><br/>
	<h3><font color="White"><?php echo "Arrival Time: "; echo $row['arrival_time'];?></h3><br/>
	<h3><font color="White"><?php echo "Bus Number: "; echo $row['bus_number'];?></td></tr></h3></div>
	<?php
	}
?>