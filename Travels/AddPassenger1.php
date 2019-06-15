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
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$addr = mysqli_real_escape_string($con, $_POST['add']);
	$cont = mysqli_real_escape_string($con, $_POST['contact']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	$amount = mysqli_real_escape_string($con, $_POST['Amount']);
	$gender = mysqli_real_escape_string($con, $_POST['Gender']);
	$bus_no = mysqli_real_escape_string($con, $_POST['bus_no']);
	$res=mysqli_query($con, "insert into passanger(firstname,lastname,address,contact,gender,age,bus_id) values('$fname','$lname','$addr',$cont,'$gender',$age,$bus_no)");
	$res2=mysqli_query($con, "select * from passanger order by passanger_id desc");
	$last_id =mysqli_fetch_array($res2);
	$last_id1=$last_id['passanger_id'];
	$res1=mysqli_query($con, "insert into ticket(ticket_price,Pass_id) values($amount,$last_id1)");
	if($res and $res1)
	{
		echo "Congrats "; echo $fname; echo" Your Bus Successfully Reserverd.";
		echo "Your Passanger Id is: "; echo $last_id1;
	}
	
	
}
?>

