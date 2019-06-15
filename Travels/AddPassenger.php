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
<form method="post" action="http://localhost/Travels/AddPassenger1.php">
    <table align="center" width="30%" border="0" >
<tr>
    <?php echo @$err;?> 
<td><input type="text" name="fname" placeholder="Enter your First Name" required /></td>
</tr>
<tr>
<td><input type="text" name="lname" placeholder="Enter your last Name" required /></td>
</tr>
<tr>
<td><input type="text" name="add" placeholder="Enter your Address" required /></td>
</tr>
<tr>
<td><input type="text" name="contact" placeholder="Enter your Contact No" required /></td>
</tr>
<tr>
<td><input type="text" name="age" placeholder="Enter your Age" required /></td>
</tr>
<tr>
<td><input type="text" name="Amount" placeholder="Enter Amount" required /></td>
</tr>
<tr>
<td><input type="text" name="Gender" placeholder="Gender" required /></td>
</tr>
<tr>
<td><input type="text" name="bus_no" placeholder="Enter the Bus Number" required /td></tr> 
<tr>
<td><button type="submit" name="btn-login">Book Now</button></td>
</tr>
<tr>
<td><button type="reset" name="Reset">Reset</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>