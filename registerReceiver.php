<?php
session_start();
include 'menu.php';

?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Receiver Registration Form</title>
		<style>
 			th{
     			color:#00000;
  			  }
 		 </style>
	<link rel="stylesheet" type="text/css" href="c2.css">
	<link rel="stylesheet" type="text/css" href="registration.css">
	<script language="javascript">
		function fx()
		{
			var letters = /^[a-zA-Z ]*$/;;
			if(document.f1.n.value=="")
			{
				alert("enter receiver's name");
				document.f1.n.focus();
				document.f1.n.select();
				return false;
			}
			if(document.f1.n.value!=="")
			{
				if(document.f1.n.value.match(letters))
				{
						document.f1.Group.focus();
				}
				else
		       {
				alert("name can only have alphabets");
				document.f1.n.focus();
				document.f1.n.select();
				return false;
			  }
			}
			if (document.f1.Group.value=="Select blood group") 
			{
				alert("Select blood group");
				document.f1.Group.focus();
				document.f1.Group.select();
				return false;
			}
			if (document.f1.Gender.value=="Select gender") 
			{
				alert("Select gender");
				document.f1.Gender.focus();
				document.f1.Gender.select();
				return false;
			}
			if(document.f1.a.value=="")
			{
				alert("enter address");
				document.f1.a.focus();
				document.f1.a.select();
				return false;
			}
			if(document.f1.phn.value=="")
			{
				alert("enter phone number");
				document.f1.phn.focus();
				document.f1.phn.select();
				return false;
			}
			if(document.f1.phn.value!=="")
		 	{
		  		var len1=document.f1.phn.value;
		  		if(len1.length==10)
		  		{
		   			 document.f1.e.focus();
		  		}
		  		else
		  		{
		   		 alert("Phone number should be of 10 digits!");
		   		 document.f1.phn.focus();
		    	 document.f1.phn.select();
		    	 return false;
		  		}
		  	}
			if(document.f1.e.value=="")
			{
				alert("enter e-mail");
				document.f1.e.focus();
				document.f1.e.select();
				return false;
			}
			if(document.f1.e.value!=="")
			{
		  		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		  		if(f1.e.value.match(mailformat))
		  		{
		    		document.f1.pass.focus();
		   
		  		}
		  		else
		 		 {
		  		  alert("You have entered an invalid email address!");
		    	  document.f1.e.focus();
		    	  document.f1.e.select();
		    	  return false;
		  		}
			}
			var password=document.f1.pass.value;
			var password2=document.f1.pass2.value;
			if(password=="")
			{
				alert("enter password");
				document.f1.pass.focus();
				document.f1.pass.select();
				return false;
			}
			if(password2=="")
			{
				alert("confirm password");
				document.f1.pass2.focus();
				document.f1.pass2.select();
				return false;
			}
			if(password!=password2)
			{
					alert("Error: Password and confirmed password do not match!");
					document.f1.pass2.focus();
					document.f1.pass2.select();
					return false;	
			}
			if (password==password2 && password!="") 
			{
				var re;
				if (password.length<8) 
				{
					alert("Error: Password must contain at least eight characters!");
					document.f1.pass.focus();
					document.f1.pass.select();
					return false;
				}
				re=/[0-9]/;
				if(!(password.match(re))) 
				{
				  alert("Error: password must contain at least one number (0-9)!");
				  document.f1.pass.focus();
				  document.f1.pass.select();
				  return false;
				}
				re = /[a-z]/;
				if(!(password.match(re))) 
				{
				  alert("Error: password must contain at least one lowercase letter (a-z)!");
				  document.f1.pass.focus();
				  document.f1.pass.select();
				  return false;
				}
				re = /[A-Z]/;
				if(!(password.match(re))) 
				{
				  alert("Error: password must contain at least one uppercase letter (A-Z)!");
				  document.f1.pass.focus();
				  document.f1.pass.select();
				  return false;
				}     
			}
			f1.submit();
		}

	</script>
</head>
<body>
<div class="header">
  <a href="home.php" class="logo"><img src="blood logo.png">
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

<br>
	<div class="opacity">
	<center>
	<form name="f1" method="POST" action="receiverRegistrationBackend.php">
	<fieldset >
	<legend align="center" style="font-size: 1.5em; color: #DC143C;" ><b>RECEIVER REGISTRATION</b></legend><br>
	<table  cellpadding="10">
	<tr>
	<th align="left">Name</th>
	<td><input type="text" name="n"  placeholder="--Receiver's Name--" size="40" ID="YOURNAME"  style="width: 100%;" required></td>
	</tr>
	<tr>
	<th align="left">Blood Group</th>
	<td>
			<select name="Group" id="Group" style="width: 100%;" required>
				<option>Select blood group</option>
    			<option>A Positive</option>
    			<option>A Negative</option>
    			<option>B Positive</option>
    			<option>B Negative</option>
    			<option>AB Positive</option>
    			<option>AB Negative</option>
    			<option>O Positive</option>
    			<option>O Negative</option>
    		</select>
	</td>
	</tr>
	<th align="left">Gender</th>
	<td>
			<select name="Gender" id="Gender" style="width: 100%;" required>
				<option>Select gender</option>
				<option>Female</option>
				<option>Male</option>
				<option>Prefer not to disclose</option>
    		</select>
	</td>
	</tr>
	<tr>
	<th align="left">Address</th>
	<td><input type="text" name="a"  placeholder="--Address--" size="40" ID="ADDRESS" style="width: 100%" required></td>
	</tr>
	<tr>
	<th align="left">Phone Number</th>
	<td><input type="number" name="phn" placeholder="+91-"size="10" ID="TELEPHONE" style="width: 100%" required></td>
	</tr>
	<tr>
	<th align="left">E-Mail</th>
	<td><input type="email" name="e" placeholder="abc@gmail.com" size="40" ID="EMAIL" style="width: 100%" required></TD>
	</tr>
	<tr>
	<th align="left">Password</th>
	<td><input type="password" name="pass"  placeholder="--Password--" size="20" ID="PASSWORD" style="width: 100%" required></td>
	</tr>
	<tr>
	<th align="left">Confirm Password</th>
	<td><input type="password" name="pass2"  placeholder="--Password--" size="20" ID="PASSWORD2" style="width: 100%" required></td>
	</tr>
	</table>
	<br>
	<input type="button" name="b1" value="REGISTER" ID="register" onClick="fx()">
	&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php"><input type="button" name="b2" value="CANCEL" ID="cancel" ></a>
	</feildset>
	</form></center>
	</div>
</body>
</html>
