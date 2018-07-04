<!DOCTYPE html>
<?php
session_start();

 ?>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
#grid{
  height:100px;
  background-color: #5500FF;
  margin: auto;
  display: grid;
  grid-template-columns: 1.15fr 2fr;
  border-bottom: solid;
border-color: #009FE3;
width: 500px;
}
#text{
  padding-top:10px;
  font-family: tahoma;
  font-size: 21px;
  color: white;
  padding-left: 15px;
  border-right: solid;
  border-color: #009FE3;
}
#input{
  font-family: tahoma;
  height: 20px;
  width: 200px;
}
#righ{
border-right: solid;
border-color: #009FE3;
  padding-top: 10px;
}
#log{
  border: 0;
  width: 100%;
  text-align: center;
  background-color: #EB166B;
  height: 30px;
margin-top: 10px;
}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="" align="center">
      <img src="log.png" alt=""/>
    </div>

    <form class="" action="login.php" method="post">

      <div class="" id="grid">
        <div id="text">
      Email:<br>
      Password:
        </div>
        <div id="righ">
      <input type="Email" id="input" name="email" value="" Placeholder="enter your email"/><br>
      <input type="password" id="input"name="password" value=""Placeholder="Enter your password"/><br>
      <input type="submit" id="log"name="" value="login"/>
        </div>
      </div>


    </form>

    <br>

  </body>
</html>
