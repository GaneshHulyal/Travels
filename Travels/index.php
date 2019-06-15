<html>
<head><title>Login or Register Here</title>
<style>
h3 {
  text-shadow: 2px 2px 5px red;
}
</style>
</head>
<body>
<div align='center'>
<br/>
<br/>
<font color='white'><h1>Welcome to Destiny Travels</h1></font>
<br/>
<br/>
<h1><font color='grey'>Login Here...</h1></font>
</div>
<?php
session_start();
include_once 'connect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$upass = mysqli_real_escape_string($con, $_POST['pass']);
	$res=mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
	$row=mysqli_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
            $err = "<p style='color: red'>Wrong Username or Password</p>";
		?>
       
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Codemarts.com - Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
h3	{
  text-shadow: 2px 2px 5px white;
}
</style>
</head>
<body background='img/slide-one.jpg'>
<center>
<div id="login-form">
<form method="post">
    <table align="center" width="30%" border="0" >
   
<tr>
    <?php echo @$err;?> 
<td><input type="text" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Sign In</button></td>
</tr>
<tr>
<td><a href="register.php"><font color='darkblue'><h3>Sign Up Here</h3></font></a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>