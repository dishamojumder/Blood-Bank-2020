<?php
session_start();
include 'menu.php';
$menu2='';

if(!isset($_SESSION["hospital"]) || $_SESSION["hospital"] != true)
  {
   $menu2 = '';
   
  }
else{
  $menu2 = '<a href="add.php" class="active">Add Blood</a>';
  
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Add Blood</title>
		<style>
 			th{
     			color:#000000;
  			  }
  			  
  		</style>
	<link rel="stylesheet" type="text/css" href="c2.css">
	<link rel="stylesheet" type="text/css" href="loginForm.css">
	<script language="javascript">
		function fx()
		{
			if (document.f4.Group.value=="") 
						{
							alert("Select blood group");
							document.f4.Group.focus();
							document.f4.Group.select();
							return false;
						}
			if (document.f4.bag.value=="") 
						{
							alert("Select type of bag");
							document.f4.bag.focus();
							document.f4.bag.select();
							return false;
						}
			if(document.f4.q.value=="")
						{
							alert("Enter quantity");
							document.f4.q.focus();
							document.f4.q.select();
							return false;
						}
			f4.submit();
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
	<form name="f4" method="POST" action="AddBloodBackend.php" >
	<fieldset >
	<legend align="center" style="font-size: 1.2em; color: #DC143C;"><b>Add Blood Information</b></legend><br>
	<table  cellpadding="10">
	<tr>
	<th align="left">Hospital</th>
	<td>
		<input type="text" name="n" value="<?php echo $_SESSION["name"]; ?>" style="width: 100%;" readonly>
	</td>
	</tr>
	<tr>
	<th align="left">Registration Number</th>
	<td>
		<input type="text" name="r" value="<?php echo $_SESSION["reg"]; ?>" style="width: 100%;" readonly>
	</td>
	</tr>
	<tr>
	<th align="left">Blood Group</th>
	<td>
			<select name="group" id="Group" style="width: 100%;" required>
				<option value="">Select blood group</option>
    			<option value="APositive">A Positive</option>
    			<option value="ANegative">A Negative</option>
    			<option value="BPositive">B Positive</option>
    			<option value="BNegative">B Negative</option>
    			<option value="ABPositive">AB Positive</option>
    			<option value="ABNegative">AB Negative</option>
    			<option value="OPositive">O Positive</option>
    			<option value="ONegative">O Negative</option>
    		</select>
	</td>
	</tr>
	<th align="left">Quantity</th>
		<td>
			<input type="number" name="q" id="q" min="1" required style="width: 100%">
		</td>
	</tr>
	</table>
	<br>
	<br>
	<center>
		<input type="submit" name="submit" value="Add" id="submit" onClick="fx()" >
	</center>
	</fieldset>
	</form>
	</center>
</body>
</html>
