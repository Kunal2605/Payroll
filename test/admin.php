<!DOCTYPE html>
<?php
include('connect.php');
session_start();
if($_SESSION['sid']==session_id())
{
  $admin=mysql_query("SELECT * from admin");
  $array=mysql_fetch_array($admin);

  $n=$array['user'];
  $ad=mysql_query("SELECT * from admin where user='$n'");
  $arr=mysql_fetch_array($ad);
}

?>
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
  		  <li><a href="add.php">Add a User</li></a>
  		  <li><a href="locate.php">Locate User</li></a>
       </ul>
      </div>
  	</div>
  </nav>

<h2 class="text-center">Hello <?php echo $arr['user']; ?>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
