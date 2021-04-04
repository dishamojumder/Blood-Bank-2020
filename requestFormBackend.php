<?php
session_start();
	include 'databaseConnection.php';
			$status=$_SESSION['who'];
		 	$name=$_POST['n'];
		 	$email=$_POST['e'];
		 	$bg=$_POST['bg'];
		 	$dn=$_POST['dn'];
		 	$hist=$_POST['hist'];
		 	$rbg=$_POST['rbg'];
		 	$regid=$_POST['regid'];
		 	$units=$_POST['u'];
		 	$sql = "INSERT INTO requests(status,patientname,email,blgroup,dname,history,rblgroup,regId,quantity) VALUES ('$status','$name','$email','$bg','$dn','$hist','$rbg','$regid','$units')";
		 	//echo $sql;
		 	if (mysqli_query($conn, $sql)) 
		 	{
				echo "<script>
				alert('A Request has been sent to the hospital. Please wait for confirmation!');
				window.location.href='home.php';
				</script>";
		 	}
		 	 else 
		 	 {
			echo "<script>
					alert('There was some promlem. Request again later.');
					window.location.href='available.php';
					</script>";
			 }
		 mysqli_close($conn);
?>