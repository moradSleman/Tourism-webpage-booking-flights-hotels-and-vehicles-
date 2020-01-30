<!DOCTYPE html>
<html lang="en" dir="ltr">


  <head>
    <meta charset="utf-8">
    <link rel="stylesheet/less" type="text/css" href="style.less" />
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>login page</title>
  </head>
  <body>
<img src='img1.jpg' >
<div class="container">
<form action="checkUser.php" method="post">
<h1 style='  margin-left:43%'> Login </h1>


<div  >
  <label for="email" >Email:</label>
  <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
  </div>
  <div>
    <label for="pwd" >password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
    </div>
    <div>
      <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"
      style="margin-top:0px; margin-left:87%">Rules</button>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">rules for id and password format</h4>
      </div>
      <div class="modal-body">
        <p>only email formats for Email</p>
        <p>only numbers or english letters for password</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<a href="homePage.php"><button  type="submit" class="btn btn-success btn-lg">
        log in</button></a>
      </br>
    </br>
        <a href="signIn.php"><button type=button class="btn btn-success btn-lg" >
                sign in</button></a><div class="alert alert-info">

  <strong>attention!</strong> you have to write a registered user email and password only.
  </div>
</br>
</br>
  <!--Copyright-->
  <div >&copy; Copyright 2018 HTML. Morad Sleman</div>
</form>
</div>
</body>
</html>
