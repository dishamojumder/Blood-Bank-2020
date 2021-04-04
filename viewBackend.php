<?php
 include_once 'databaseConnection.php';
 session_start();
 $name=$_POST['n'];
 $email=$_POST['e'];
 $dname=$_POST['d'];
 $hist=$_POST['h'];
 $rbl=$_POST['r'];
 $quantity=$_POST['q'];
 if ($rbl=='O Positive') 
      $col='OPositive';
  elseif ($rbl=='A Positive') 
      $col='APositive';
   elseif ($rbl=='B Positive') 
      $col='BPositive';  
    elseif ($rbl=='AB Positive') 
      $col='ABPositive';
    elseif ($rbl=='AB Negative') 
      $col='ABNegative';  
       elseif ($rbl=='A Negative') 
      $col='ANegative'; 
     elseif ($rbl=='B Negative') 
      $col='BNegative'; 
    else
      $col='ONegative';
$sql='SELECT '.$col.' as col from `blood_info` where `regId`="'.$_SESSION["reg"].'"';
$result= mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
  	{
  		$num=$row['col'];
  	}
  	if(isset($_POST["accept"])&&$num>=$quantity)
  	{
  	
  		$sql3='UPDATE `requests` SET `accept`="yes" where `regId`="'.$_SESSION["reg"].'" AND `patientname`="'.$name.'" AND `rblgroup`="'.$rbl.'" AND `dname`="'.$dname.'" AND `history`="'.$hist.'" AND `quantity`='.$quantity;
  		if (mysqli_query($conn, $sql3))  
  		 {
  		 	$sql2='UPDATE `blood_info` SET `'.$col.'`=(`'.$col.'`-'.$quantity.') where `regId`="'.$_SESSION["reg"].'"';
  		 			 if (mysqli_query($conn, $sql2)) 
  		 				 	{
  		 						echo "<script>
  		 						alert('Request Accepted!');
  		 						window.location.href='view.php';
  		 						</script>";
  		 				 	}
  		 	}
  		 }
  		 elseif (isset($_POST["accept"])&&$num<$quantity) 
  		 {
  		 			echo "<script>
  		 								alert('Cant Accept Request!Number of available samples is less than number of requested samples.');
  		 								window.location.href='view.php';
  		 								</script>";
  		 }
  		 if(isset($_POST["reject"]))
  			{
  		 	  		$sql3='UPDATE `requests` SET `accept`="rej" where `regId`="'.$_SESSION["reg"].'" AND `patientname`="'.$name.'" AND `rblgroup`="'.$rbl.'" AND `dname`="'.$dname.'" AND `history`="'.$hist.'" AND `quantity`='.$quantity;
  		 	  		if (mysqli_query($conn, $sql3))  
  		 			{
  		 	  		echo "<script>
  		 	  							alert('You have rejected the request.');
  		 	  							window.location.href='view.php';
  		 	  							</script>";
  		 	  		}
  		 	 }
  mysqli_close($conn);
?>