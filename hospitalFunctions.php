<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blood Bank</title>
<style type="text/css">
        .class1 {
          background-image: url("General_EduRes_Heart_RedBloodCells.jpg");
          position: relative;
          margin: 0 auto;
          height: 100%;
          width: 100%;
          background-repeat: no-repeat;
          background-size: cover;
          }
        .class2{
           align-items: center;
        }
     button{
             background: rgb(0, 0, 0);/* Fallback color */
             background: rgba(0, 0, 0, 0.5);/* Black background with opacity */
             color: #ffffff;
             padding: 2%;
             border-radius: 100%;
             width:200px;
             height:200px;
             font-size:20px;
             align-items: center;
            }
</style>
<link rel="stylesheet" type="text/css" href="c2.css">
</head>

<body>
<div class="header">
  <a href="home.php" class="logo"><img src="blood logo.png" style="height:40px; width:40px; ">
  <br>Blood Bank</a>
  <div class="header-right">
    <a href="register.php">Register</a>
    <a href="#logout.php">Logout</a>
  </div>
</div>

<table class="class1">
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr style="height: 100%; width: 100%;">
    <td class="class2">
      <center>
        <a href="available.php">
        <button type="button" align="center">Add Blood Information</button>
        </a>
      </center>
      
    </td>
     <td class="class2">
      <center>
        <a href="loginReceiver.php">
        <button type="button" align="center">View Requests</button>
      </a>
      </center>
      
    </td>
  </tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
  <tr><td><br></td></tr>
</table> 
</body>
</html>


   <!-- <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php //echo $row['regId'];?>">
      <input type="hidden" name="bg" value="<?php// echo $row['blgroup'];?>">
      <input type="hidden" name="q" value="<?php //echo $row['sum(quantity)'];?>">
      <?php //if($_SESSION["r"]= $row['regId']) {?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 50%; height: 12%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;" >
      <?php 
    }//else{?>
       <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 50%; height: 12%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;">
<?php
}?>-->
     style="width: 99%; float: center;"

     <link rel="stylesheet" type="text/css" href="c2.css">
    <link rel="stylesheet" type="text/css" href="forms.css">
    <script type="text/javascript">
        function fx()
        {
          if(document.f1.n.value=="")
          {
            alert("enter hospital's name");
            document.f1.n.focus();
            document.f1.n.select();
            return false;
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
    <?php echo $menu2; ?>
    <?php echo $menu3; ?>
    <?php echo $menu4; ?>
    <?php echo $menu; ?>
  </div>
</div>
<form name="f7" method="POST" action="viewBackend.php">
  <center>
<fieldset align= "center">
<table cellpadding="10" >
<legend style="font-size: 2em; color: #DC143C;"><center>View Requests</center></legend><br>
<?php
include_once 'databaseConnection.php';
  $sql="SELECT * FROM `requests` WHERE regId='$reg'";
  $result=mysqli_query($conn,$sql) or die("ERROR 234");
  while($row=mysqli_fetch_array($result))
  {
?>
<tr>
  <th align="left">Patient's Name</th>
  <td><?php echo $row['patientname'];?></td>
</tr>
 <tr>
  <th align="left">Email of account holder</th>
  <td><?php echo $row['email'];?></td>
</tr> 
<tr>
  <th align="left">Doctor's name</th>
  <td><?php echo $row['dname'];?></td>
</tr>
<tr>
  <th align="left">History of previous transfusion</th>
  <td><?php echo $row['history'];?></td>
</tr>
<tr>
  <th align="left">Requested Blood Group</th>
  <td><?php echo $row['rblgroup'];
  if ($row['rblgroup']=='O Positive') 
      $col='OPositive';
  elseif ($row['rblgroup']=='A Positive') 
      $col='APositive';
   elseif ($row['rblgroup']=='B Positive') 
      $col='BPositive';  
    elseif ($row['rblgroup']=='AB Positive') 
      $col='ABPositive';
    elseif ($row['rblgroup']=='AB Negative') 
      $col='ABNegative';  
       elseif ($row['rblgroup']=='A Negative') 
      $col='ANegative'; 
     elseif ($row['rblgroup']=='B Negative') 
      $col='BNegative'; 
    else
      $col='ONegative';
  ?></td>
</tr>
<tr>
  <th align="left">Quantity requested</th>
  <td><?php echo $row['quantity'];?></td>
</tr>
<tr>
  <td><input type="button" name="accept" value="Accept" ID="accept" onClick="fx()"></td>
  &nbsp;&nbsp;&nbsp;&nbsp;<td><a href="home.php"><input type="button" name="reject" value="Reject" ID="reject"style="width: 20%;"></a></td>
  
 <!-- <th align="left">Quantity Available(of requested blood group)</th>
  <td><?php
 // include_once 'databaseConnection.php';
 // $sql="SELECT '$col' AS '$col1' FROM `blood_info`";
 // $result=mysqli_query($conn,$sql) or die("ERROR 234");
 //while($row=mysqli_fetch_array($result))
  {
    ?>
    <?php// echo $row['$col1'];?>
    </td>
</tr>
  <?php
}
?>-->
 <?php
}
?>
</tr>
</table>
</fieldset>
</center>
</form>
</body>
</html>