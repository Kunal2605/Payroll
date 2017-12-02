<!DOCTYPE html>
<?php
include('connect.php');
  $u=$_POST['user'];
  $user=mysql_query("SELECT * from users where id='$u'") or die('Failed');
  $array=mysql_fetch_array($user);
  if($array['id']==$u){?>
    <head>
    <title>Test</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
       #map {
        height: 250px;
        width: 100%;
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
          <div class="collapse navbar-collapse">
      		 <ul class="nav navbar-nav">
      		  <li class="disabled"><a href="add.php">Add a User</li></a>
      		  <li class="active"><a href="locate.php">Locate User</li></a>
           </ul>
           <ul class="nav navbar-nav navbar-right">
             <li><a href="locate.php">Go Back</li></a>
           </ul>
          </div>
      	</div>
      </nav>
      <h2 class="text-center">User Details</h2>
      <hr style="width:50%">
    <div id="row">
      <div class="col-sm-3">
        <img src="userp.jpg" width="200px" height="200px">
      </div>
      <div class="col-sm-3">
        <table class="table">
        <tbody>
          <tr>
            <td>User-ID</td>
            <td><?php echo $array['id']; ?></td>
          </tr>
          <tr>
            <td>Name</td>
            <td><?php echo $array['name'] ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $array['email'] ?></td>
          </tr>
        </tbody>
      </table>
      </div>
      <div class="col-sm-6">
        <div id="start"></div>
        <div id="end"></div>
        <div id="map"></div>
        <script>

          function initMap() {
            var lati = <?php echo $array['lati']; ?>;
            var long = <?php echo $array['longi']; ?>;

  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: new google.maps.LatLng(lati, long),

  });
  for(var i = 0 ; i < 4 ; i++){
  // Create markers on the map

    var pos = new google.maps.LatLng(lati, long);

    var marker = new google.maps.Marker({
      position: pos,
      map: map,
});

lati -= Math.random()*.005;
long -= Math.random()*.001;
 }
}
        </script>
      </div>
    </div>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDINYtRbJyogwn62bEDOlpGDPAVCUiZTfQ&callback=initMap">
    </script>


            <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>

    </html>

  <?php }else{
    echo "User does not exist";
  }

?>
