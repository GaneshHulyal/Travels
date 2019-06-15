<html>
<head><title>Add Your Bus</title>
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
	$routeID = mysqli_real_escape_string($con, $_POST['route_id']);
	$route_point = mysqli_real_escape_string($con, $_POST['route_point']);
	$pick_up = mysqli_real_escape_string($con, $_POST['pick_up']);
	$res=mysqli_query($con, "insert into route(route_id,route_point,pick_up_point) values($routeID,'$route_point','$pick_up')");
	if($res)
	{
		echo "Route Added Successfully.";
	}
	
}
?>

 