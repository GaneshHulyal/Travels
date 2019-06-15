<html>
<head>
<script>
function myFunction() {
  window.print();
}
</script>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body background='img/slide-one.jpg'>
<div align="center">
<h3><font color='grey'>Happy Journey.</h3></font>
</div>
<?php
session_start();
include_once 'connect.php';
if(isset($_POST['btn-login']))
{
	$pid = mysqli_real_escape_string($con, $_POST['PID']);
	$res=mysqli_query($con, "SELECT * FROM passanger,bus_info,ticket WHERE passanger_id='$pid' and bus_number=bus_id and passanger_id=Pass_id");
	$row=mysqli_fetch_array($res);?>
	<html><body>
	<div align="center">
	<h2><font color="white"></font></h2>
	<table align="center" width="30%" border="0" bgcolor="khaki" >
	<tr><td>
	<div align="center"><h3><font color="White"><?php echo "First Name: "; echo $row['firstname'],"\n";?></h3><br/>
	<h3><font color="White"><?php echo "Last Name: "; echo $row['lastname'];?></h3><br/>
	<h3><font color="White"><?php echo "Passanger ID: "; echo $row['passanger_id'];?></h3><br/>
	<h3><font color="White"><?php echo "Ticket Price: "; echo $row['ticket_price'];?></h3><br/>
	<h3><font color="White"><?php echo "Deprature Time : "; echo $row['departure_time'];?></h3><br/>
	<h3><font color="White"><?php echo "Arrival Time: "; echo $row['arrival_time'];?></h3><br/>
	<h3><font color="White"><?php echo "From : "; echo $row['source'];?></h3><br/>
	<h3><font color="White"><?php echo "To: "; echo $row['destination'];?></td></tr></h3></div><br/>
	<tr><td><button onclick="myFunction()">Get Yout Ticket</button></td></tr>
	<?php
	}
?>
</body>
</html>