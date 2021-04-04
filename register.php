 <?php
session_start();
include 'menu.php';
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="c2.css">
		<link rel="stylesheet" type="text/css" href="forms.css">
	</head>
	<body>
		<div class="header">
  			<a href="home.php" class="logo"><img src="blood logo.png" >
  				<br>Blood Bank</a>
  			<div class="header-right">
  				<a href="home.php">Home</a>
  				<a href="available.php">Availability</a>
  			  	<?php echo $menu2; ?>
  			  	<?php echo $menu3; ?>
  			    <a href="register.php" class="active">Register</a>
  			    <?php echo $menu; ?>
  			  </div>
		</div>
		<table id="type">
			<th align="center" colspan="2">Register as:</th>
			<tr>
				<td align="center">
					<a href="registerHospital.php" >
						<img src="hospital.jpg" alt="hospital" style="width:600px; height: 300px ">
						<br><br><button type="button" align="center">Hospital</button>
					</a>
				</td>
				<td align="center">
					<a href="registerReceiver.php" >
						<img src="Blood-Donor-Day-2020.jpg" alt="Receiver" style="width:600px; height: 300px ">
						<br><br><button type="button" align="center">Receiver</button>
					</a>
				</td>
			</tr>
			
		</body>
</html>