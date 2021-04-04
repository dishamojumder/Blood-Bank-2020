<?php
 include_once 'databaseConnection.php';
 session_start();
 $email=$_POST['e'];
 $pwd=$_POST['pass1'];
 $sql 	= "select name,regId from hospitals where email='$email' AND password='$pwd' ";
 $result= mysqli_query($conn,$sql);
 $num 	= mysqli_num_rows($result);
 if ($num > 0) {
 	 while($row = $result->fetch_assoc())
 	 	{//echo $row["name"];
 	 		$_SESSION["name"]= $row["name"];
 	 		$_SESSION["reg"]=$row["regId"];
 	 	}
	 $_SESSION["loggedin"] = true;
 	 $_SESSION["hospital"]=true;
 	 //$_SESSION["reg"]=
	 header('location: home.php');
 }
 else {
	 echo "<script>
			alert('Invalid ID/Password');
			window.location.href='loginHospital.php';
			</script>";
}
 $conn->close();
 
?>