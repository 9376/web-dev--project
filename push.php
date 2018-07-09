<?php
include_once('db.php');

$name=$_POST['name'];
$post=$_POST['comments'];
$sql="INSERT INTO `coments`(`id`, `name`, `comment`) VALUES (NULL,'$name','$post')";
if($conn->query($sql)===TRUE){
  echo "comment posted";
}else {
  echo "no comment posted";
}


 ?>
