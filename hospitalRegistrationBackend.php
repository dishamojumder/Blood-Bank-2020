<?php
session_start();
	include_once 'databaseConnection.php';
		 	$name=$_POST['n'];
		 	$adrs=$_POST['a'];
		 	$state=$_POST['state'];
		 	$reg=$_POST['regId'];
		 	$phn=$_POST['phn'];
		 	$email=$_POST['e'];
		 	$pwd=$_POST['pass'];
		    $sql = "INSERT INTO hospitals(name,address,state,regId,num,email,password) VALUES ('$name','$adrs','$state','$reg','$phn','$email','$pwd')";
		 	if (mysqli_query($conn, $sql)) 
		 	{
				header('location: loginHospital.php');
		 	}
		 	 else 
		 	 {
			echo "<script>
			alert('Existing Member. Login!');
			window.location.href='loginHospital.php';
			</script>";
			 }
		 mysqli_close($conn);
?>