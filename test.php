<?php
include 'db.php';
 ?>

<!DOCTYPE html>
<html lang="#" dir="ltr">
  <head>
    <style media="screen">

      #bdy{
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 100%;
      }
    </style>
    <meta charset="utf-8">
    <title></title>


  </head>
  <body id="bdy">
    <div>
      <div align="center">
        <p align="center">
        <img src="mm.png" alt="me">
      </p>
      </div>
      <div  align="center">
        <form class="" action="index.php" method="post">
          name:<input type="text" name="name" value=""/><br>
  <textarea id="text" name="comments" rows="8" cols="80"></textarea><br>
  <button type="button" id="btn">post </button>
        </form>

      </div>
    </div>
    <div class="pstr">
<div class="" align="center">
  <img src="pst.jpg" alt="">
</div>
<br>
<br>
<div class="" align="center">
  posts
</div>
<hr>
<div id="comments">
<?php
$sql="SELECT * FROM comments LIMIT 2";
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
this is the chat area
</div>
<button type="button" id="lod" name="button">load</button>
    </div>
  </body>
</html>


<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>
<script>
$("document").ready(function (){
var count=2;
$("#lod").click(function (){
  count=count+1;
  $("#comments").load("comments.php",{
    newcount:count
  });
});
});
</script>
<script type="text/javascript">
  $(document).ready(function (){
$("#btn").click(function (){
  $.post("in.php")
});
  });
</script>
