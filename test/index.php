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
      <div class="collpase navbar-collapse">
  		 <ul class="nav navbar-nav">
  		  <li class="active"><a href="#">Home</li></a>
  		  <li><a href="#">About Us</li></a>
  		  <li><a href="#">Contact Us</li></a>
  		  <li><a href="#">#</li></a>
       </ul>
      </div>
  	</div>
  </nav>

<h2 class="text-center">Admin Portal</h2>
<hr style="width:50%">
<!--form-->
<div class="conatiner text-center">
  <form class="form-inline" action="log.php" method="post">
  <div class="form-group">
    Username:
    <input type="text" class="form-control" name="user" required>
  </div><br><br>
  <div class="form-group">
    Password:
    <input type="password" class="form-control" name="password" required>
  </div><br><br>
  <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
