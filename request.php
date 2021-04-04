<?php
session_start();
include 'databaseConnection.php';

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] != true)
    {
        echo "<script>
            alert('Please login and request again.');
            window.location.href='loginReceiver.php';
            </script>";
    	    
    }
    else
    {
    	    if(isset($_SESSION["hospital"]) && $_SESSION["hospital"] == true)
    	    {
    	    	echo "<script>
    				alert('Sorry! Hospitals cant request for blood samples.');
    				window.location.href='available.php';
    				</script>";
    	    }
    	    else
            {
                if(isset($_POST["r"]))
                {
                    $_SESSION["r"] = $_POST["r"];
                    $_SESSION["rbg"]=$_POST["rbg"];
                    $_SESSION["qu"]=$_POST["qu"];
                    $reg=$_SESSION["r"];
                    $sql    = "select name from hospitals where regId='$reg' ";
                    $result= mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                        $_SESSION["hn"]=$row["name"];
       
                    }
                  
                }
                if(isset($_SESSION["who"]) && $_SESSION["who"] == "Yourself")
                 header('location: requestSelf.php');
                if(isset($_SESSION["who"]) && $_SESSION["who"] == "Other")
                    header('location: requestOther.php');
                    
                }
    			
        }
    
    ?>
  