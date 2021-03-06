<?php
session_start();
include "configuration.php";
include "sql.php";
include "class.profile.php";

if(!empty($_POST)){
	include "post.php";
}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign in</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
  background-attachment:fixed;
  background-image:url(img/wallpaper8.jpg);
  background-size:cover;
  font-family: 'Times New roman', serif;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
  color:white;
  box-shadow:0px 0px 10px white;
  text-align:center;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  border: solid 1px black;
  box-shadow:0px 0px 10px black;
}
.form-signin input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border: solid 1px black;
  box-shadow:0px 0px 10px black;
}
</style>
</head>
<body>
    <div class="container">
      <form class="form-signin" action="" method="post">
<?php
if($reg){
	if($res>0){
?>
<div class="alert alert-success" role="alert"> <strong>Successful!</strong> Now u can <a href="/">sign in</a> </div>
<?php
	}else{
?>
<div class="alert alert-danger" role="alert"> 
<?php
if(strlen($res>1)) echo $res;
else echo 'ошибка';
?>
</div>
<?php
	}
}
?>
        <h2 class="form-signin-heading">Registration</h2>
        <label for="inputLogin" class="sr-only">Login</label>
        <input id="inputLogin" class="form-control" placeholder="Логин" required autofocus type="text" name="login">
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" placeholder="Пароль" required type="password" name="pass" style="margin:0">
        <label for="inputPassword2" class="sr-only">Password eshe raz pls da</label>
        <input id="inputPassword2" class="form-control" placeholder="Пароль повторно" required type="password" name="pass2">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="regme" value="1">Register</button>
        <a href="/">Sign in</a>
      </form>
    </div> <!-- /container -->
</body>
</html>
