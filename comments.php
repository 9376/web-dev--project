<?php
include_once('db.php');

$count=$_POST['newcount'];

 $sql="SELECT * FROM comments LIMIT $count";
 $result= mysqli_query($conn,$sql);
 if (mysqli_num_rows($result)>0){
   while($row= mysqli_fetch_assoc($result)){
     echo "<p>";
     echo $row['name'];
     echo "<br>";
     echo $row['comment'];
     echo "</p>";

   }
 }
 else {
   echo "there are no comments";// code...
 }
  ?>
