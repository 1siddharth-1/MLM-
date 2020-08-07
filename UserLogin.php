
<?php

include('config.php'); 
include('function.php'); 
session_start();

$memberid="";
$password="";

    $memberid = $_POST['memberid'];  
    $password = $_POST['password'];  
      
        $memberid = stripcslashes($memberid);  
        $password = stripcslashes($password);  
        $memberid = mysqli_real_escape_string($conn, $memberid);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql="SELECT `id` FROM `user` WHERE `memberid`='$memberid' AND `password`='$password'";
        $result = mysqli_query($conn, $sql);  
       if($result -> num_rows > 0){
        while($row = $result ->fetch_assoc()){
             $_SESSION["id"] = $row["id"];
            $_SESSION["memberid"] = $row["memberid"];
       echo "<script>alert('You are Successfully Login to User Dashboard');document.location='userdashboard.php'</script>";
        }  
    }
        else{  
            echo "<script>alert('Invalid Username or Password');document.location='userlogin.html'</script>";
        }     
?>

