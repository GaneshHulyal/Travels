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
</div>
<?php
session_start();
include_once 'connect.php';

if(isset($_POST['btn-login']))
{
	$src = mysqli_real_escape_string($con, $_POST['src']);
	$dest = mysqli_real_escape_string($con, $_POST['dest']);
	$res=mysqli_query($con, "SELECT * FROM bus_info WHERE source='$src' and destination='$dest'");
	$row=mysqli_fetch_array($res);
	echo $row['total_seat'],"\n";
	echo $row['source'];
	echo $row['destination'];
	echo $row['bus_number'];
	}
?>