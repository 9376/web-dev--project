<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    #bdy{
      background-image: url("cool.jpg");
    }
      .from{
        border-right: solid;
        border-color: cyan;
        top: 10px;
        bottom: 10px;
        margin: auto;
        width: 500px;
        background-color: pink;
        display: grid;
        grid-template-columns: 1fr 2fr;
      }
.text{
  padding-left: 10px;
  border-right: solid;
  border-color: cyan;
  font-size: 20px;
  font-family: tahoma;
  color: white;
}
#input{
  padding-top: 5px;
  height: 22px;
  width: 220px;
}
.click{
  border-right: solid;
  border-color: cyan;
}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body id="bdy">
    <div align="center">
      <img src="signup.png" alt="">
    </div>
    <form class="from" action="in.php" method="post">


<div class="text">
  First Name:
  <br>
  Second Name:
  <br>
  Email:
  <br>
  Password:
  <br>
</div>

<div class="">
<input id="input" type="text" name="first_name" value="" placeholder="enter your first name"/>
<input id="input" type="text" name="second_name" value="" placeholder="enter your second name"/>
<input id="input" type="email" name="sign_email" value="" placeholder="enter your Email"/>
<input id="input" type="password" name="sign_password" value=""placeholder="enter your password"/>
</div>
 <button type="button"  name="button">log in</button>
<input type="submit" id="cool" name="click" value="Sign up">
    </form>

  </body>
</html>
