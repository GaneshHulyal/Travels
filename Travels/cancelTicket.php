<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Destiny Travels</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
h3	{
  text-shadow: 2px 2px 5px blue;
}
</style>
</head>
<body background='img/slide-one.jpg'>
<div align='center'>
<br/>
<font color='white'><h1>Welcome to Destiny Travels</h1></font>
<br/>
<h1><font color='grey'>Get your Ticket Here...</h1></font>
</div>
<center>
<div id="login-form">
<form method="post">
    <table align="center" width="30%" border="0" >
<tr>
    <?php echo @$err;?> 
<td><input type="text" name="PID" placeholder="Enter Passanger ID" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Cancel Your Ticket</button></td>
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
<?php
session_start();
include_once 'connect.php';
if(isset($_POST['btn-login']))
{
$pid = mysqli_real_escape_string($con, $_POST['PID']);
$res1=mysqli_query($con,"DELETE FROM ticket WHERE Pass_id=$pid");
$res=mysqli_query($con,"DELETE FROM passanger WHERE passanger_id=$pid");
if($res1 and $res)
{
	?><html><body><div align="center"><h3><font color="White"><?php echo "Yout Ticket Canceled Successfully";?></font></h3></div></body></html><?php
}
else
{
	echo "Cancelation failed";
}
}
?>