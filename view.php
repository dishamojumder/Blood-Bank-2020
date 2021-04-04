<?php
session_start();
include 'menu.php';
$reg=$_SESSION["reg"];
$menu3='';

if(!isset($_SESSION["hospital"]) || $_SESSION["hospital"] != true)
  {
   $menu3 = '';
   
  }
else{
  $menu3 = '<a href="view.php" class="active">View Requests</a>';
  
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>View Requests</title>
    <style type="text/css">
      #accept,#reject
      {
        /*width:50%;*/
        height:5%;
        border:none;
        background-color:#B22222;
        color:#ffffff;
        font-size:1.5em;
        border-radius: 2px;
        padding: 1%;
      }
       #accept,#reject:hover
      {
        opacity:0.9;
        cursor:pointer;
      }
    </style>
		<link rel="stylesheet" type="text/css" href="c2.css">
  <link rel="stylesheet" type="text/css" href="forms.css">
  <script language="javascript">
    function fx()
    {
      
      f7.submit();
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

<br>
<center>
  <form name="f7" method="POST" action="viewBackend.php" >
  <fieldset >
  <legend align="center" style="font-size: 2em; color: #DC143C;"><b>View Requests</b></legend><br>
  <table  cellpadding="10">
  <?php
  include_once 'databaseConnection.php';
 
    $sql="SELECT * FROM `requests` WHERE regId='$reg' and accept = 'no'";
      
    $result=mysqli_query($conn,$sql) or die("ERROR 234");
      if (mysqli_num_rows($result)>0) 
      {
       $row=mysqli_fetch_array($result);
      
  ?>
  <tr>
  <th align="left">Patient's Name</th>
  <td>
    <input type="text" name="n" value="<?php echo $row['patientname'];?>" style="width: 100%;" readonly>
  </td>
  </tr>
  <tr>
  <th align="left">Email of account holder</th>
  <td>
    <input type="text" name="e" value="<?php echo $row['email'];?>" style="width: 100%;" readonly>
  </td>
  </tr>
  <tr>
  <th align="left">Doctor's name</th>
  <td>
    <input type="text" name="d" value="<?php echo $row['dname'];?>" style="width: 100%;" readonly>
  </td>
  </tr>
  <tr>
  <th align="left">History of previous transfusion</th>
    <td>
      <input type="text" name="h" value="<?php echo $row['history'];?>" readonly style="width: 100%;">
    </td>
  </tr>
<tr>
  <th align="left">Requested Blood Group</th>
    <td>
      <input type="text" name="r" value="<?php echo $row['rblgroup'];?>" readonly style="width: 100%;">
    </td>
  </tr>
  <tr>
  <th align="left">Quantity requested</th>
  <td>
    <input type="text" name="q" value="<?php echo $row['quantity'];?>" style="width: 100%;" readonly>
  </td>
  </tr>
  <tr>
  <td>
    <input type="submit" name="accept" value="accept" id="accept" onClick="fx()"  style="width: 50%;">
    </form>
  </td>
  &nbsp;&nbsp;&nbsp;&nbsp;<td>
      <input type="submit" name="reject" value="reject" id="reject" style="width: 70%;"></td>
    </form>
     <?php
    }//end if
    else{
      ?>
      <tr>
       <td>
          No new requests.
      </td>
      <?php
        }//end else
      ?>
  </tr>
    
  </tr>  
</table>
</fieldset>
</form>
</center>
</body>
</html>
