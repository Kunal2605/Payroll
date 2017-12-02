<!DOCTYPE html>
<?php
include('connect.php');
session_start();
?>
<head>
<title>Test</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>
  body{
    overflow-x: hidden;
  }
</style>
</head>
<body>

  <!--head-->
  <div class="container-fluid">
    <img src="app.png" style="width:100%; height:200px; padding-left:0px; margin:0px" >
  </div>
  <!--navbar-->
  <nav class="navbar navbar-default" role="navigation">
  	<div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collpase navbar-collapse">
  		 <ul class="nav navbar-nav">
  		  <li class="active"><a href="add.php">Add a User</li></a>
  		  <li><a href="locate.php">Locate User</li></a>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="index.php">Logout</a></li>
       </ul>
      </div>
  	</div>
  </nav>

<h2 class="text-center">Add a User</h2>
<hr style="width:50%">
  <div class="conatiner text-center">
    <form class="form-inline" action="add_user.php" method="post">
    <div class="row">
    <div class="form-group">
        <div class="col-sm-6">
      Employee ID:
        </div>
        <div class="col-sm-6">
      <input type="text" class="form-control" name="id" required>
        </div>
    </div><br><br>

    <div class="form-group">
      <div class="col-sm-6">
      Name:
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" required>
    </div>
    </div><br><br>
    <div class="form-group">
        <div class="col-sm-6">
      E-mail:
    </div>
      <div class="col-sm-6">
      <input type="email" class="form-control" name="email" required>
    </div>
    </div><br><br>
    <div class="form-group">
        <div class="col-sm-6">
      Password:
    </div>
      <div class="col-sm-6">
      <input type="password" class="form-control" name="password" required>
    </div>
    </div><br><br>
  </div>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
  <br>
  </div>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
