<?php
$menu = "";
$menu2="";
$menu3="";
$menu4="";
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true)
  {
   $menu = '<a href="login.php">Login</a>';
    $menu4='<a href="register.php" >Register</a>';
  }
else{
  $menu = '<a href="logout.php">Logout</a>';
}
if(!isset($_SESSION["hospital"]) || $_SESSION["hospital"] != true)
  {
   $menu2 = '';
   $menu3='';
  }
else{
  $menu2 = '<a href="add.php">Add Blood</a>';
  $menu3 = '<a href="view.php">View Requests</a>';
}
?>