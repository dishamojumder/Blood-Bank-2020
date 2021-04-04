<?php
	include_once 'databaseConnection.php';
	session_start();
	$name=$_POST['n'];
		 	$group=$_POST['Group'];
		 	$gender=$_POST['Gender'];
		 	$adrs=$_POST['a'];
		 	$phn=$_POST['phn'];
		 	$email=$_POST['e'];
		 	$pwd=$_POST['pass'];
		    $sql = "INSERT INTO receiver(name,blgroup,gender,address,num,email,password) VALUES ('$name','$group','$gender','$adrs','$phn','$email','$pwd')";
		 if (mysqli_query($conn, $sql)) {
			header('location: loginReceiver.php');
		 	}
		 	 else 
		 	 {
			echo "<script>
			alert('Existing Member. Login!');
			window.location.href='loginReceiver.php';
			</script>";
	
		 }
		 mysqli_close($conn);
?>