<?php
 include_once 'databaseConnection.php';
 session_start();
 $email=$_POST['e'];
 $pwd=$_POST['pass1'];
 $sql 	= "select email,name,blgroup from receiver where email='$email' AND password='$pwd' ";
 $result= mysqli_query($conn,$sql);
 $num 	= mysqli_num_rows($result);
 if ($num > 0) {
 	 $_SESSION["loggedin"] = true;
	 while($row=mysqli_fetch_array($result))
  	{
 		$_SESSION["email"]=$row["email"];
 		$_SESSION["rname"]=$row["name"];
 		$_SESSION["obg"]=$row["blgroup"];
 	}
	 header('location: Recipient.php');
 }
 else {
	 echo "<script>
			alert('Invalid ID/Password');
			window.location.href='loginReceiver.php';
			</script>";
}
 mysqli_close($conn);
 
?>