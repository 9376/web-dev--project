<?php
session_start();
include_once('db.php');
  $email=$_POST['email'];
$password=$_POST['password'];


if(empty($email)||empty($password)){
echo "this sucks";
}else{
  $sql="SELECT * FROM `user` WHERE `password`='$password'";
  $result=mysqli_query($conn,$sql);
  $resultCheck=mysqli_num_rows($result);
  if($resultCheck<1){
    echo "no such user";
  }

  else{
    $row=mysqli_fetch_assoc($result);
    if($row['password']==$password){
      echo "coolio";
      header("location:learn.html");
  $_SESSION['u_name']=$row['first_name'];
    }
  }
}

 ?>
