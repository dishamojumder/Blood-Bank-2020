<?php
session_start();
include 'menu.php';

?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Recipient</title>
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
						
						if(document.f6.req.value=="")
						{
							alert("enter whether you want to request for blood samples");
							document.f6.req.focus();
							document.f6.req.select();
							return false;
						}
						if(document.f6.who.value=="")
						{
								alert("enter who do you want to request the samples for");
								document.f6.who.focus();
								document.f6.who.select();
								return false;
						}
						if(document.f6.Group.value=="")
						{
								alert("enter the blood group of the recipient");
								document.f6.Group.focus();
								document.f6.Group.select();
								return false;
						}
						f6.submit();
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
			<form name="f6" method="POST" action="recipientBackend.php" >
			<fieldset style="width: 90%">
			<legend align="center" style="font-size: 1.5em; color: #DC143C;"><b>Blood Requisition</b></legend><br>
			<table  cellpadding="10">
			<tr>
			<th align="left">Do you want to request for blood samples?</th>
			<td>
				<select name="req" id="req" style="width: 100%;" required>
						<option value="">Select if you want to request for blood samples</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>
				</select>
			</td>
			</tr>
			<tr>
			<th align="left">If the answer to the previous question was yes then who do you want to request the samples for?Otherwise choose 'Not Applicable'.</th>
			<td>
				<select name="who" id="who" style="width: 100%;" required>
						<option value="">Select the recipient</option>
						<option value="Not Applicable">Not Applicable</option>
						<option value="Yourself">Yourself</option>
						<option value="Other">Other</option>
				</select>
			</td>
			</tr>
			<tr>
			<tr>
			<th align="left">If the answer to the previous question was Other then mention the blood group of the recipient, otherwise choose 'Not Applicable'?</th>
			<td>
				<select name="g" id="g" style="width: 100%;" required>
						<option value="">Select blood group</option>
						<option value="Not Applicable">Not Applicable</option>
						<option value="A Positive">A Positive</option>
						<option value="A Negative">A Negative</option>
						<option value="B Positive">B Positive</option>
						<option value="B Negative">B Negative</option>
						<option value="AB Positive">AB Positive</option>
						<option value="AB Negative">AB Negative</option>
						<option value="O Positive">O Positive</option>
						<option value="O Negative">O Negative</option>
				</select>
			</td>
			</tr>
			
			</table>
			<br>
			<br>
			<center>
				<input type="submit" name="submit" value="submit" id="submit" onClick="fx()" >
			</center>
			</fieldset>
			</form>
			</center>
		</body>
</html>