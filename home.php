<?php
session_start();
include 'menu.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blood Bank</title>
<style type="text/css">
        body, html {
          height: 100%;
          margin: 0 ;
        }
        .class1 {
         /* background-image: url("blood-donation-clipart-10.jpg");
          position: relative;
          margin: 0 auto;
          height: 100%;
          width: 100%;
          background-repeat: no-repeat;
          background-size: cover;*/
          /* The image used */
            background-image: url("bloodbagnotext-0001.jpg");

            /* Full height */
            height: 55%; 
           
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
        .class2{
          
             padding-top: 6%;
             padding-bottom: 2%;
             padding-left: 29%;
             align-items: center;
        }
        
      .h1{
            text-align: center;
            color: #DC143C;
           }
           button{
                    background: rgb(178,34,34);/* Fallback color */
                    color: #ffffff;
                    padding: 5%;
                    border-radius: 100%;
                    font-size:1.5em;
                    align-items: center;
             }
             
             

</style>
<link rel="stylesheet" type="text/css" href="c2.css">
</head>

<body>
<div class="header">
  <a href="home.php" class="logo"><img src="blood logo.png">
  <br>Blood Bank</a>
  <div class="header-right">
    <a href="home.php" class="active">Home</a>
    <a href="available.php">Availability</a>
    <?php echo $menu2; ?>
    <?php echo $menu3; ?>
    <?php echo $menu4; ?>
    <?php echo $menu; ?>
  </div>
</div>
<div class="class1">
  <div class="class2">
     
        <a href="available.php">
        <button type="button" align="center">Request<br>For Blood<br>Samples</button>
        </a>
      
      </div>
</div>
<h2 class="h1">How are Blood Groups Classified?</h2>
<div style="width: 50%; float:left">
   <p style="padding-left: 2.5%; font-size: 1.2em; padding-right: 2%;">
        ABO blood group system, the classification of human blood based on the inherited properties of red blood cells (erythrocytes) as determined by the presence or absence of the antigens A and B, which are carried on the surface of the red cells. Persons may thus have type A, type B, type O, or type AB blood.<br>
        On their surface, red cells have inherited chemical structures called antigens that can cause a person’s immune system to make antibodies against them. Humans have 35 major groups or families of these antigens, as well as other minor groups, but consideration of two, the ABO group and the RhD group, is very important to ensure that a transfusion recipient receives compatible blood. The presence of antigens within these groups is what determines a person’s blood type. Blood types are referred to as Type A, Type B, Type AB (which has both A and B antigens), or Type O (which has neither A or B antigens) followed by positive or negative, which indicates the presence of the RhD antigen. Persons who are RhD negative have no RhD antigen.
      </p>
</div>

<div style="width: 50%; float:right">
   <img src="shutterstock_231245152.jpg" style="width: 100%; height: 22em; padding-right: 2%; padding-top: 1%;">
</div>

<div style="width: 100%; float: left;">
    
    <div style="width: 50%; float:left">
      <h2 class="h1">Blood Group Compatibility</h2>
        <img src="blood-types-chart-655px.jpg" style="padding: 2%;width: 100%; height: 32em;">
    </div>
    <div style="width: 50%; float:right;">
      <h2 class="h1">Blood Group Distrubution in India</h2>
      <br>
      <table style="font-size: 1.5em;">
        <tr>
          <th>Blood Group</th>
          <th>Percentage</th>
        </tr>
        <tr>
          <td>O+</td>
          <td>27.85%</td>
        </tr>
        <tr>
          <td>A+</td>
          <td>20.8%</td>
        </tr>
        <tr>
          <td>B+</td>
          <td>38.14%  </td>
        </tr>
        <tr>
          <td>AB+</td>
          <td>8.93%</td>
        </tr>
        <tr>
          <td>O-</td>
          <td>1.43%</td>
        </tr>
        <tr>
          <td>A-</td>
          <td>0.57%</td>
        </tr>
        <tr>
          <td>B-</td>
          <td>1.79%</td>
        </tr>
        <tr>
          <td>AB-</td>
          <td>0.49%</td>
        </tr>
      </table>
      <span style="font-size: 1.5em;"><center>Population of India=1,326,093,247</center></span>
    </div>
</div>
</body>
</html>