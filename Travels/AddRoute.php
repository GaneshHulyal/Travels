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
<form method="post" action="http://localhost/Travels/AddRoute1.php">
    <table align="center" width="30%" border="0" >
<tr>
    <?php echo @$err;?> 
<td><input type="text" name="route_id" placeholder="Enter Route ID" required /></td>
</tr>
<tr>
<td><input type="text" name="route_point" placeholder="Enter Route Point" required /></td>
</tr>
<tr>
<td><input type="text" name="pick_up" placeholder="Enter Pick Up Point" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Add Route</button></td>
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