<?php
include 'db.php';
$first_name=$_POST['first_name'];
$second_name=$_POST['second_name'];
$email=$_POST['sign_email'];
$password=$_POST['sign_password'];
$sql="INSERT INTO `user`(`id`, `first_name`, `second_name`, `password`, `email`) VALUES (NULL,'$first_name','$second_name','$password','$email')";



if ($conn->query($sql) === TRUE) {
    echo "Welcome in new user";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="" align="center">
      <a href="login.php"><img src="come.jpg" alt=""></a>
    </div>
  </body>
</html>
