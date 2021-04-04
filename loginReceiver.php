<?php
session_start();
$menu = "";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true)
  {
   $menu = '<a href="login.php" class="active">Login</a>';
  }
else{
  $menu = '<a href="logout.php">Logout</a>';
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Receiver Login Form</title>
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
			if(document.f3.e.value=="")
			{
				alert("enter email");
				document.f3.e.focus();
				document.f3.e.select();
				return false;
			}
			if(document.f3.e.value!=="")
			{
		  		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		  		if(f3.e.value.match(mailformat))
		  		{
		    		document.f3.pass1.focus();
		   
		  		}
		  		else
		 		 {
		  		  alert("You have entered an invalid email address!");
		    	  document.f3.e.focus();
		    	  document.f3.e.select();
		    	  return false;
		  		}
			}
			if(document.f3.pass1.value=="")
			{
				alert("enter password");
				document.f3.pass1.focus();
				document.f3.pass1.select();
				return false;
			}
			f3.submit();
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
    <a href="register.php" >Register</a>
    <?php echo $menu; ?>
  </div>
</div>

<br>
<center>
	<form name="f3" method="POST" action="receiverLoginBackend.php" >
	<fieldset >
	<legend align="center" style="font-size: 1.5em; color: #DC143C;"><b>Receiver Login</b></legend><br>
	<table  cellpadding="10">
	<tr>
	<th align="left">E-Mail</th>
	<td><input type="email" name="e" placeholder="abc@gmail.com" size="40" id="email" style="width: 100%" required></td>
	</tr>
	<tr>
	<th align="left">Password</th>
	<td><input type="password" name="pass1"  placeholder="--Enter Password--" size="20" id="password" style="width: 100%" required></td>
	</tr>
	</table>
	<br>
	<br>
	<center>
		<input type="submit" name="submit" value="Sign in" id="submit" onClick="fx()" >
	</center>
	</fieldset>
	</form>
	</center>
</body>
</html>

	
