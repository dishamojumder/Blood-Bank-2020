<?php
session_start();
$menu = "";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true)
  {
   $menu = '<a href="login.php">Login</a>';
  }
else{
  $menu = '<a href="logout.php">Logout</a>';
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="c2.css">
		<link rel="stylesheet" type="text/css" href="forms.css">
	</head>
	<body>
		<div class="header">
  			<a href="home.php" class="logo"><img src="blood logo.png">
  				<br>Blood Bank</a>
  			<div class="header-right">
  				<a href="home.php">Home</a>
  				<a href="available.php">Availability</a>
    			<a href="register.php" >Register</a>
    			<a href="login.php" class="active">Login</a>
  			</div>
		</div>
		<table id="type">
			<th align="center" colspan="2">Login as:</th>
			<tr>
				<td align="center">
					<a href="loginHospital.php" >
						<img src="hospital.jpg" alt="hospital" style="width:600px; height: 300px ">
						<br><br><button type="button" align="center">Hospital</button>
					</a>
				</td>
				<td align="center">
					<a href="loginReceiver.php" >
						<img src="Blood-Donor-Day-2020.jpg" alt="Receiver" style="width:600px; height: 300px ">
						<br><br><button type="button" align="center">Receiver</button>
					</a>
				</td>
			</tr>
			<th colspan="2">
				<br>Not a member? <a href="register.php" style="color: #ffffff" >Sign up</a>
			</tr>
		</body>
</html>