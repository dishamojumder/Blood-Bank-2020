<?php
session_start();
		$req=$_POST['req'];
	 	$_SESSION['who']=$_POST['who'];
	 	$_SESSION['g']=$_POST['g'];
	 	if ($req=='No') {
	 		$_SESSION["need"] = 'false';
	 	}
	 	else
	 	{
	 		$_SESSION["need"] = 'true';
	 	}
	 	
	 	header('location: available.php');
?>