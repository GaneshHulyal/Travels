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
<h1><font color='grey'>Book your bus...</h1></font>
</div>
<center>
<div id="login-form">
<form method="post" action="http://localhost/Travels/AddBus1.php">
    <table align="center" width="30%" border="0" >
<tr>
    <?php echo @$err;?> 
<td><input type="text" name="total_seat" placeholder="Enter Total Seats" required /></td>
</tr>
<tr>
<td><input type="text" name="dept_loc" placeholder="Enter Departure Location" required /></td>
</tr>
<tr>
<td><input type="time" name="dept_time" placeholder="Enter Departure Time" required /></td>
</tr>
<tr>
<td><input type="date" name="dept_date" placeholder="Enter Departure Date" required /></td>
</tr>
<tr>
<td><input type="text" name="bus_no" placeholder="Enter Bus Number" required /></td>
</tr>
<tr>
<td><input type="text" name="src" placeholder="Enter the Source" required /></td>
</tr>
<tr>
<td><input type="text" name="dest" placeholder="Enter the Destination" required /></td>
</tr>
<tr>
<td><input type="time" name="arrT" placeholder="Enter Arrival Time" required /></td>
</tr>
<tr>
<td><input type="text" name="route_no" placeholder="Enter the Route_no" required /></td></tr> 
<td><button type="submit" name="btn-login">Add Bus</button></td>
</tr>
<tr>
<td><button type="reset" name="Reset">Reset</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>432