<?php
session_start();    // Session start
 
if(isset($_POST['check']))    // Check form submit with IF Isset function
{
$username="admin";    // set variable value
$password="123";        // set variable value
if($_POST['username']==$username && $_POST['password']==$password)   // Check Given user name, password and Variable user name password are same
{
$_SESSION['username']=$username;    // set session from given user name
header('location:AdminHome.php');
}
else
{
$err="Authentication Failed Try again!";
}
}
?>
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
h1 {
  text-shadow: 2px 2px 5px Red;
}
</style>

</head>
<body background='img/slide-one.jpg'>
<div align='center'>
<br/>
<br/>
<h1>Admin Panel</h1>
</div>
<center>
<?php if(isset($err)){ echo $err; } ?> 
<div id="login-form">
<form method="post" name="loginauth" target="_self">
<table align="center" width="30%" border="20" bordercolor='Red'>
<tr>
<td><input type="text" name="username" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="password" name="password" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="check">Sign Me Up</button></td>
</tr>
<tr>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>