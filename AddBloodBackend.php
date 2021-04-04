<?php
session_start();
	include_once 'databaseConnection.php';
			 	$reg=$_POST['r'];
			 	$group=$_POST['group'];
			 	$quantity=(int)$_POST['q'];
			 	$sql1="SELECT regId FROM `blood_info` WHERE regId='$reg'";
			 	$result= mysqli_query($conn,$sql1);
			 	if(mysqli_num_rows($result)==0){
			 		echo $sql1;
			 		$sql = "INSERT INTO blood_info(regId) VALUES ('$reg')";
			 		$result= mysqli_query($conn,$sql);
			 	}
			 	$sql3='UPDATE `blood_info` SET `'.$group.'`=`'.$group.'`+'.$quantity.' where `regId`="'.$reg.'"';
			 	if (mysqli_query($conn, $sql3)) 
			 	{
					echo "<script>
					alert('Added Succesfully!');
					window.location.href='home.php';
					</script>";
			 	}
			 	 else 
			 	 {
					echo "<script>
					alert('There was some problem in adding the information. Please try again!');
					window.location.href='add.php';
					</script>";
				 }
			 	
			 mysqli_close($conn);	 	
?>