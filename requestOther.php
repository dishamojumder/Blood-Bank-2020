<?php
session_start();
include 'menu.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Request</title>
		<style type="text/css">
			#submit
			{
				width:10%;
				height:5%;
				border:none;
				background-color:#B22222;
				color:#ffffff;
				font-size:1.5em;
				border-radius: 2px;
				padding: 1%;
			}
			#submit:hover
			{
				opacity:0.9;
				cursor:pointer;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="c2.css">
		<link rel="stylesheet" type="text/css" href="forms.css">
		<script language="javascript">
				function fx()
				{
					letters = /^[a-zA-Z ]*$/;
					if(document.f5.n.value=="")
					{
						alert("enter patients's name");
						document.f5.n.focus();
						document.f5.n.select();
						return false;
					}
						if(document.f5.n.value!=="")
						{
							if(document.f5.n.value.match(letters))
							{
									document.f5.bg.focus();
							}
							else
					       {
							alert("name can only have alphabets");
							document.f5.dn.focus();
							document.f5.dn.select();
							return false;
						  }
						}
						if(document.f5.bg.value=="")
						{
							alert("enter patient's blood group");
							document.f5.bg.focus();
							document.f5.bg.select();
							return false;
						}
					if(document.f5.dn.value=="")
					{
						alert("enter doctor's name");
						document.f2.e.focus();
						document.f2.e.select();
						return false;
					}
						if(document.f5.dn.value!=="")
						{
							if(document.f5.dn.value.match(letters))
							{
									document.f5.hist.focus();
							}
							else
					       {
							alert("name can only have alphabets");
							document.f5.dn.focus();
							document.f5.dn.select();
							return false;
						  }
						}
						if(document.f5.hist.value=="")
						{
							alert("enter transfusion history");
							document.f5.hist.focus();
							document.f5.hist.select();
							return false;
						}
						if(document.f5.rbg.value=="")
						{
							alert("enter required blood group");
							document.f5.rbg.focus();
							document.f5.rbg.select();
							return false;
						}
						if(document.f5.h.value=="")
						{
							alert("enter name of hospital");
							document.f5.h.focus();
							document.f5.h.select();
							return false;
						}
						if(document.f5.u.value=="")
						{
							alert("enter amount of blood units required");
							document.f5.u.focus();
							document.f5.u.select();
							return false;
						}
						f5.submit();
				}
				
	</script>
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
    <?php echo $menu4; ?>
    <?php echo $menu; ?>
  </div>
</div>

<br>
<center>
	<form name="f5" method="POST" action="requestFormBackend.php">
	<legend align="center" style="font-size: 2em; color: #DC143C;"><b>Request for blood</b></legend><br>
	
		<fieldset>
			<legend align="center" style="font-size: 1.5em; color: #DC143C;"><b>Patient Details</b></legend><br>
			<table  cellpadding="10">
				<tr>
				<th align="left">Name</th>
				<td><input type="text" name="n"  placeholder="--Patient's Name--" size="40" id="n" style="width: 100%" required></td>
				</tr>
				<tr>
				<th align="left">E-Mail</th>
				<td><input type="email" name="e" value="<?php echo $_SESSION["email"]; ?>" size="40" id="email" style="width: 100%" readonly></td>
				</tr>
				<tr>
				<th align="left">Blood Group</th>
				<td><input type="text" name="bg"  value="<?php echo $_SESSION["g"]; ?>" size="12" id="bg" style="width: 100%" readonly></td>
				</tr>
				<tr>
				<th align="left">Doctor's Name</th>
				<td><input type="text" name="dn"  placeholder="--Doctor's Name--" size="20" id="dn" style="width: 100%" required></td>
				</tr>
				<tr>
				<th align="left">Previous transfusion</th>
				<td>
					<select name="hist" id="hist" style="width: 100%;" required>
						<option value="">Received a blood transfusion previously?</option>
    					<option>Yes</option>
    					<option>No</option>
				</td>
				</tr>
			</table>
		</fieldset>
		<br>
		<fieldset>
		<legend align="center" style="font-size: 1.5em; color: #DC143C;"><b>Blood Requisition Details</b></legend><br>
			<table  cellpadding="10">
				<tr>
				<th align="left">Required Blood group</th>
				<td>
						
					    <input type="text" name="rbg" value="<?php echo $_SESSION["rbg"];?>" id="rbg" style="width: 100%" readonly>
				</td>
				</tr>
				<tr>
				<th align="left">Request from Hospital</th>
				<td>
					<input type="hidden" name="regid" value="<?php echo $_SESSION["r"]; ?>">
					<input type="text" name="h"  value="<?php echo $_SESSION["hn"];?>" size="40" id="h" style="width: 100%" readonly></td>
				</tr>
				<tr>
				<th align="left">Number of units needed</th>
				<td><input type="number" name="u" placeholder="--Number of units needed--"  size="3" id="u" style="width: 100%" required min="1" max="<?php echo $_SESSION["qu"];?>"></td>
				</tr>
				<tr>
				
			</table>
		</fieldset>
	<br>
	<br>
	<center>
		<input type="submit" name="submit" value="Request" id="submit" onClick="fx()" >
	</center>
	
	</form>
</center>
</body>
</html>
