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
	$seat = mysqli_real_escape_string($con, $_POST['total_seat']);
	$dept_loc = mysqli_real_escape_string($con, $_POST['dept_loc']);
	$dept_time = mysqli_real_escape_string($con, $_POST['dept_time']);
	$dept_date = mysqli_real_escape_string($con, $_POST['dept_date']);
	$bus_no = mysqli_real_escape_string($con, $_POST['bus_no']);
	$src = mysqli_real_escape_string($con, $_POST['src']);
	$dest = mysqli_real_escape_string($con, $_POST['dest']);
	$arrT = mysqli_real_escape_string($con, $_POST['arrT']);
	$route_no = mysqli_real_escape_string($con, $_POST['route_no']);
	$res=mysqli_query($con, "insert into bus_info(total_seat,departure_loc,departure_time,departure_date,bus_number,source,destination,arrival_time,route_number) values('$seat','$dept_loc','$dept_time','$dept_date',$bus_no,'$src','$dest','$arrT','$route_no')");
	if($res)
	{
		echo "Bus Added Successfully.";
	}
	
}
?>

