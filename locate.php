<!DOCTYPE html>

<head>
<title>Test</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

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
      <div class="collapse navbar-collapse">
  		 <ul class="nav navbar-nav">
  		  <li><a href="add.php">Add a User</li></a>
  		  <li class="active"><a href="locate.php">Locate User</li></a>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <li><a href="index.php">Logout</a></li>
       </ul>
      </div>
  	</div>
  </nav>

<h2 class="text-center">Locate User</h2>
<hr style="width:50%">
<div class="conatiner text-center">
<form class="form-inline" action="user_page.php" method="post">
<div class="form-group">
  User ID:
  <input type="text" class="form-control" name="user" required>
</div><br><br>
<!-- <div class="form-group">
  Date:
  <input type="text" class="form-control" name="user" required>
</div><br><br> -->
  <button type="submit" class="btn btn-default">Go</button>
</form><br>
</div>
<!-- <div class="text-center">
  <button type="submit" class="btn btn-default">Logout</button>
</div> -->

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
