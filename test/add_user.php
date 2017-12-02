<?php

include('connect.php');

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$insert="INSERT into users (id,name,email,password) VALUES('$id','$name','$email','$password')";

if(!mysql_query($insert)){
  <script type=text/javascript>
    
  </script>
  echo "<script type='text/javascript'>alert('ID already exists');</script>";
}else{
  header('Location: add.php');
  // echo "<script type='text/javascript'>alert('User Added');</script>";

}

mysql_close();
?>
