<?php
session_start();
include 'menu.php';
$need="";
$bg="";
$eligible="";
$rbg="";

if (isset($_SESSION["need"])) 
  $need=$_SESSION["need"];
if(isset($_SESSION["who"]) && $_SESSION["who"] == "Yourself")
  if (isset($_SESSION["obg"])) 
  $bg=$_SESSION["obg"];
if(isset($_SESSION["who"]) && $_SESSION["who"] == "Other")
  if (isset($_SESSION["g"])) 
  $bg=$_SESSION["g"];
$eligible_array = array();
if( $need=="true")

{
if ($bg=="A Positive") 
        {
          
          array_push($eligible_array, "APositive","ONegative","ANegative","OPositive");
        }
        if ($bg=="A Negative") 
                {
                  array_push($eligible_array, "ONegative","ANegative");
                  
                }
      if ($bg=='O Positive') 
      {
        
        array_push($eligible_array, "ONegative","OPositive",$bg);
      }
      if ($bg=='O Negative') 
      {
        array_push($eligible_array, "ONegative");
        
      }
      if ($bg=='B Positive') 
      {
        array_push($eligible_array, "BPositive","ONegative","BNegative","OPositive");
        
      }
      if ($bg=='B Negative') 
      {
        
        array_push($eligible_array, "ONegative","BNegative");
      }
      if ($bg=='AB Positive') 
        {
          array_push($eligible_array, "APositive","ONegative","ANegative","OPositive","ABPositive","ABNegative","BNegative","BPositive");
          
        }
        if ($bg=='AB Negative') 
        {
          array_push($eligible_array, "ONegative","ANegative","ABNegative","BNegative");
        }
    }
    

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Available blood</title>
<link rel="stylesheet" type="text/css" href="c2.css">
</head>

<body>
<div class="header">
  <a href="home.php" class="logo"><img src="blood logo.png">
  <br>Blood Bank</a>
  <div class="header-right">
    <a href="home.php">Home</a>
    <a href="available.php" class="active">Availability</a>
    <?php echo $menu2; ?>
    <?php echo $menu3; ?>
    <?php echo $menu4; ?>
    <?php echo $menu; ?>
  </div>
</div>
<br>

<table class="t1">
<legend style="font-size: 2em; color: #DC143C;"><center>Available Blood Sample Details</center></legend><br>
<tr>
  <th >Hospital</th>
  <th >State</th>
  <th >O+</th>
  <th >O-</th>
  <th >A+</th>
  <th >A-</th>
  <th >B+</th>
  <th >B-</th>
  <th >AB+</th>
  <th >AB-</th>
  
  
</tr>  
<?php
include_once 'databaseConnection.php';
  $sql="select hospitals.name,hospitals.state,blood_info.* from blood_info inner join hospitals on blood_info.regId=hospitals.regId GROUP by hospitals.regId,hospitals.state";
  $result=mysqli_query($conn,$sql) or die("ERROR 234");
  while($row=mysqli_fetch_array($result))
  {
?>
<tr>
  <td>
    <?php echo $row['name'];?>
  </td>
  <td>
    <?php echo $row['state'];?>
  </td>
  <td>
      <?php echo $row['OPositive'];
      $flag = "disabled";
      $opacity = 0.5;
      if(in_array("OPositive",$eligible_array)||$need==""){
        $flag = "";
        $opacity = 1;
      }
        ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value=  "O Positive">
      <input type="hidden" name="qu" value="<?php echo $row['OPositive'];?>">
      <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>
      </form>
  </td>
  <td>
      <?php echo $row['ONegative'];
       $flag = "disabled";
      $opacity = 0.5;
      if(in_array("ONegative",$eligible_array)||$need==""){
        
        $flag = "";
        $opacity = 1;
      }?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="O Negative">
      <input type="hidden" name="qu" value="<?php echo $row['ONegative'];?>">
     <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>

      </form>
  </td>
  <td>
      <?php echo $row['APositive'];
       $flag = "disabled";
      $opacity = 0.5;
      if(in_array("APositive",$eligible_array)||$need==""){
        
        $flag = "";
        $opacity = 1;
      }
      ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="A Positive">
      <input type="hidden" name="qu" value="<?php echo $row['APositive'];?>">
      <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>

      </form>
  </td>
  <td>
      <?php echo $row['ANegative'];
       $flag = "disabled";
        $opacity = 0.5;
        if(in_array("ANegative",$eligible_array)||$need==""){
        $flag = "";
        $opacity = 1;
      }
      ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="A Negative">
      <input type="hidden" name="qu" value="<?php echo $row['ANegative'];?>">
      <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>
      </form>
  </td>
  <td>
      <?php echo $row['BPositive'];
         $flag = "disabled";
         $opacity = 0.5;
        if(in_array("BPositive",$eligible_array)||$need==""){
        $flag = "";
        $opacity = 1;
      }
      ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="B Positive">
      <input type="hidden" name="qu" value="<?php echo $row['BPositive'];?>">
      <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>
      </form>
  </td>
  <td>
      <?php echo $row['BNegative'];
       $flag = "disabled";
      $opacity = 0.5;
      if(in_array("BNegative",$eligible_array)||$need==""){
        $flag = "";
        $opacity = 1;
      }
      ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="B Negative">
      <input type="hidden" name="qu" value="<?php echo $row['BNegative'];?>">
      <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>
      </form>
  </td>
  <td>
      <?php echo $row['ABPositive'];
         $flag = "disabled";
      $opacity = 0.5;
      if(in_array("ABPositive",$eligible_array)||$need==""){
        $flag = "";
        $opacity = 1;
      }
      ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="AB Positive">
      <input type="hidden" name="qu" value="<?php echo $row['ABPositive'];?>">
     <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>
      </form>
  </td>
  <td>
      <?php echo $row['ABNegative'];
       $flag = "disabled";
      $opacity = 0.5;
      if(in_array("ABNegative",$eligible_array)||$need==""){
        $flag = "";
        $opacity = 1;
      }
      ?>
      <br>
      <form method="POST" action="request.php">
      <input type="hidden" name="r" value="<?php echo $row['regId'];?>">
      <input type="hidden" name="rbg" value="AB Negative">
      <input type="hidden" name="qu" value="<?php echo $row['ABNegative'];?>">
     <?php
      if($need=="false"){
        ?>
      <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; opacity: 0.5; font-size:1em; padding: 1%;" disabled="">
      <?php
            }// if($need=="false"){
          else{
              
            ?>
            <input type="submit" name="b1" value="Request Sample"  id="b1" style="width: 90%; height: 15%; border:none; background-color: #CD5C5C; color:#ffffff; font-size:1em; padding: 1%;opacity: <?php echo $opacity;?>" <?php echo $flag;?>>
           <?php
         }
         ?>
      </form>
  </td>
  
    <?php
}
?>
  </tr>
</table>
</body>
</html>
