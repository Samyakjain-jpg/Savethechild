<?php
session_start();
include ('dbcon.php');
?>


<?php

if (isset($_POST['login']))
{
  $user = $_POST['username'];
  $pwd =  $_POST['password'];


  $query = "SELECT * FROM student WHERE username = '$user' && password = '$pwd'";



  $data = mysqli_query($con, $query);
  $total =mysqli_num_rows($data);
  echo $total;


  if($total==1){

        $_SESSION['username'] =$user; 
    header('location:dashboard.php');

  }
  else{

  
    echo "log
    in failed";
  }
    }
?>